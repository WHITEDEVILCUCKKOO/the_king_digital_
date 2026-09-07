<?php
require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../functions/helper.php';
require_once __DIR__ . '/../../functions/admin-functions.php';
require_once __DIR__ . '/../../functions/settings.php';
require_once __DIR__ . '/../../functions/csrf.php';
require_once __DIR__ . '/../../includes/auth.php';

$settings = getSettings($conn);

$reservedKeysByGroup = [
    'general' => ['site_name'],
    'contact' => ['site_email', 'site_phone', 'site_whatsapp', 'site_address'],
    'seo'     => ['default_meta_title', 'default_meta_description'],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        empty($_POST['csrf_token']) ||
        !verifyCsrfToken($_POST['csrf_token'])
    ) {
        setFlashMessage('error', 'Invalid security token.');
        redirect(BASE_URL . 'admin/settings/index.php');
        exit;
    }

    $siteName = trim($_POST['site_name'] ?? '');
    $siteEmail = trim($_POST['site_email'] ?? '');
    $sitePhone = trim($_POST['site_phone'] ?? '');
    $siteWhatsapp = trim($_POST['site_whatsapp'] ?? '');
    $siteAddress = trim($_POST['site_address'] ?? '');

    $metaTitle = trim($_POST['default_meta_title'] ?? '');
    $metaDescription = trim(
        $_POST['default_meta_description'] ?? ''
    );

    $errors = [];

    if ($siteName === '') {
        $errors[] = 'Site name is required.';
    }

    if (
        $siteEmail !== '' &&
        !filter_var($siteEmail, FILTER_VALIDATE_EMAIL)
    ) {
        $errors[] = 'Please enter a valid email address.';
    }

    $customToSave = [];

    foreach ($reservedKeysByGroup as $group => $reservedKeys) {
        $customKeys = $_POST['custom'][$group]['key'] ?? [];
        $customValues = $_POST['custom'][$group]['value'] ?? [];

        foreach ($customKeys as $index => $rawKey) {
            $key = trim((string) $rawKey);
            $value = trim((string) ($customValues[$index] ?? ''));

            if ($key === '' && $value === '') {
                continue;
            }

            if ($key === '') {
                $errors[] = 'Custom setting keys cannot be empty.';
                continue;
            }

            if (!preg_match('/^[a-zA-Z0-9_.-]+$/', $key)) {
                $errors[] = "\"$key\" is not a valid setting key. Use only letters, numbers, dashes, dots, and underscores.";
                continue;
            }

            if (in_array($key, $reservedKeys, true)) {
                $errors[] = "\"$key\" is a reserved setting name and can't be used as a custom key.";
                continue;
            }

            $customToSave[] = [$group, $key, $value];
        }
    }

    if (!empty($errors)) {
        setFlashMessage(
            'error',
            implode(' ', $errors)
        );
        redirect(BASE_URL . 'admin/settings/index.php');
        exit;
    }

    $success = true;

    $success = saveSetting($conn, 'site_name', $siteName, 'general') && $success;

    $success = saveSetting($conn, 'site_email', $siteEmail, 'contact') && $success;

    $success = saveSetting($conn, 'site_phone', $sitePhone, 'contact') && $success;

    $success = saveSetting($conn, 'site_whatsapp', $siteWhatsapp, 'contact') && $success;

    $success = saveSetting($conn, 'site_address', $siteAddress, 'contact') && $success;

    $success = saveSetting($conn, 'default_meta_title', $metaTitle, 'seo') && $success;

    $success = saveSetting($conn, 'default_meta_description', $metaDescription, 'seo') && $success;

    foreach ($customToSave as [$customGroup, $customKey, $customValue]) {
        $success = saveSetting($conn, $customKey, $customValue, $customGroup) && $success;
    }

    if ($success) {
        setFlashMessage(
            'success',
            'Settings updated successfully.'
        );
    } else {
        setFlashMessage(
            'error',
            'Unable to update settings.'
        );
    }
    redirect(BASE_URL . 'admin/settings/index.php');
    exit;
}

$flash = getFlashMessage();

$customSettingsByGroup = [
    'general' => getCustomSettingsForGroup($conn, 'general', $reservedKeysByGroup['general']),
    'contact' => getCustomSettingsForGroup($conn, 'contact', $reservedKeysByGroup['contact']),
    'seo'     => getCustomSettingsForGroup($conn, 'seo', $reservedKeysByGroup['seo']),
];

function settingValue(array $settings, string $key): string
{
    return htmlspecialchars($settings[$key] ?? '', ENT_QUOTES, 'UTF-8');
}

function renderCustomSettingRows(string $group, array $rows): void
{
    if (empty($rows)) {
        $rows = [['setting_key' => '', 'setting_value' => '']];
    }

    $groupAttr = htmlspecialchars($group, ENT_QUOTES, 'UTF-8');

    foreach ($rows as $row) {
        $key = htmlspecialchars($row['setting_key'] ?? '', ENT_QUOTES, 'UTF-8');
        $value = htmlspecialchars($row['setting_value'] ?? '', ENT_QUOTES, 'UTF-8');
        ?>
        <div class="setting-row">
            <input
                type="text"
                name="custom[<?= $groupAttr ?>][key][]"
                value="<?= $key ?>"
                placeholder="Setting key">

            <input
                type="text"
                name="custom[<?= $groupAttr ?>][value][]"
                value="<?= $value ?>"
                placeholder="Setting value">

            <button type="button" class="remove-setting">
                Remove
            </button>
        </div>
        <?php
    }
}

?>

<h1>Settings</h1>

<?php if ($flash): ?>
    <div class="<?= htmlspecialchars($flash['type'], ENT_QUOTES, 'UTF-8'); ?>">
        <?= htmlspecialchars($flash['message'], ENT_QUOTES, 'UTF-8'); ?>
    </div>
<?php endif; ?>
<form method="POST">
    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(generateCsrfToken(), ENT_QUOTES, 'UTF-8'); ?>">
    <h2>General Settings</h2>
    <div>
        <label for="site_name">
            Site Name
        </label>
        <input type="text" id="site_name" name="site_name" value="<?= settingValue($settings, 'site_name'); ?>" maxlength="150" required>
    </div>

    <div class="custom-settings" data-group="general">
        <?php renderCustomSettingRows('general', $customSettingsByGroup['general']); ?>
    </div>

    <button type="button" class="add-setting" data-group="general">
        + Add More
    </button>

    <h2>Contact Settings</h2>

    <div>
        <label for="site_email">
            Email
        </label>

        <input type="email" id="site_email" name="site_email" value="<?= settingValue($settings, 'site_email'); ?>" maxlength="191">
    </div>


    <div>
        <label for="site_phone">
            Phone
        </label>

        <input type="text" id="site_phone" name="site_phone" value="<?= settingValue($settings, 'site_phone'); ?>" maxlength="30">
    </div>


    <div>
        <label for="site_whatsapp">
            WhatsApp
        </label>

        <input type="text" id="site_whatsapp" name="site_whatsapp" value="<?= settingValue($settings, 'site_whatsapp'); ?>" maxlength="30">
    </div>


    <div>
        <label for="site_address">
            Address
        </label>

        <textarea id="site_address" name="site_address" rows="4"><?= settingValue($settings, 'site_address'); ?></textarea>
    </div>

    <div class="custom-settings" data-group="contact">
        <?php renderCustomSettingRows('contact', $customSettingsByGroup['contact']); ?>
    </div>

    <button type="button" class="add-setting" data-group="contact">
        + Add More
    </button>

    <h2>SEO Settings</h2>

    <div>
        <label for="default_meta_title">
            Default Meta Title
        </label>

        <input type="text" id="default_meta_title" name="default_meta_title" value="<?= settingValue($settings, 'default_meta_title'); ?>" maxlength="255">
    </div>


    <div>
        <label for="default_meta_description">
            Default Meta Description
        </label>

        <textarea id="default_meta_description" name="default_meta_description" rows="5" maxlength="500"><?= settingValue($settings, 'default_meta_description'); ?></textarea>
    </div>

    <div class="custom-settings" data-group="seo">
        <?php renderCustomSettingRows('seo', $customSettingsByGroup['seo']); ?>
    </div>

    <button type="button" class="add-setting" data-group="seo">
        + Add More
    </button>

    <button type="submit">
        Save Settings
    </button>

</form>

<script>
    document.querySelectorAll('.add-setting').forEach(function (addButton) {
        addButton.addEventListener('click', function () {
            const group = addButton.dataset.group;
            const container = document.querySelector('.custom-settings[data-group="' + group + '"]');

            if (!container) {
                return;
            }

            const row = document.createElement('div');
            row.className = 'setting-row';

            row.innerHTML = `
            <input
                type="text"
                name="custom[${group}][key][]"
                placeholder="Setting key"
            >

            <input
                type="text"
                name="custom[${group}][value][]"
                placeholder="Setting value"
            >

            <button type="button" class="remove-setting">
                Remove
            </button>
        `;

            container.appendChild(row);
        });
    });

    document.querySelectorAll('.custom-settings').forEach(function (container) {
        container.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-setting')) {
                event.target.closest('.setting-row').remove();
            }
        });
    });
</script>