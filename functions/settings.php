<?php

function getSettings(mysqli $conn): array
{
    try {
        $stmt = $conn->prepare(
            "SELECT setting_key, setting_value, setting_group
             FROM settings
             ORDER BY setting_group, setting_key"
        );

        if ($stmt === false) {
            error_log(
                '[' . date('Y-m-d H:i:s') . '] Get Settings Prepare Error: '
                    . $conn->error
            );
            return [];
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $settings = [];
        while ($row = $result->fetch_assoc()) {
            $settings[$row['setting_key']] = $row['setting_value'];
        }
        return $settings;
    } catch (mysqli_sql_exception $e) {
        error_log(
            '[' . date('Y-m-d H:i:s') . '] Get Settings Error: '
                . $e->getMessage()
        );
        return [];
    }
}

function getSetting(mysqli $conn, string $key, ?string $default = null): ?string
{
    try {
        $stmt = $conn->prepare("SELECT setting_value FROM settings WHERE setting_key = ? LIMIT 1");

        if ($stmt === false) {
            error_log(
                '[' . date('Y-m-d H:i:s') . '] Get Setting Prepare Error: '
                    . $conn->error
            );
            return $default;
        }

        $stmt->bind_param("s", $key);
        $stmt->execute();
        $result = $stmt->get_result();
        $setting = $result->fetch_assoc();
        return $setting ? $setting['setting_value'] : $default;
    } catch (mysqli_sql_exception $e) {
        error_log(
            '[' . date('Y-m-d H:i:s') . '] Get Setting Error: '
                . $e->getMessage()
        );
        return $default;
    }
}

function saveSetting(
    mysqli $conn,
    string $key,
    ?string $value,
    string $group = 'general'
): bool {
    try {
        $stmt = $conn->prepare(
            "INSERT INTO settings
            (setting_key, setting_value, setting_group)
            VALUES (?, ?, ?)
            ON DUPLICATE KEY UPDATE
                setting_value = VALUES(setting_value),
                setting_group = VALUES(setting_group)"
        );

        if ($stmt === false) {
            error_log(
                '[' . date('Y-m-d H:i:s') . '] Save Setting Prepare Error: '
                    . $conn->error
            );
            return false;
        }

        $stmt->bind_param(
            "sss",
            $key,
            $value,
            $group
        );
        $stmt->execute();
        return true;
    } catch (mysqli_sql_exception $e) {
        error_log(
            '[' . date('Y-m-d H:i:s') . '] Save Setting Error: '
                . $e->getMessage()
        );
        return false;
    }
}

function deleteSetting(mysqli $conn, string $key): bool
{
    try {
        $stmt = $conn->prepare("DELETE FROM settings WHERE setting_key = ?");

        if ($stmt === false) {
            error_log(
                '[' . date('Y-m-d H:i:s') . '] Delete Setting Prepare Error: '
                    . $conn->error
            );
            return false;
        }

        $stmt->bind_param("s", $key);
        $stmt->execute();
        return true;
    } catch (mysqli_sql_exception $e) {
        error_log(
            '[' . date('Y-m-d H:i:s') . '] Delete Setting Error: '
                . $e->getMessage()
        );
        return false;
    }
}

function getCustomSettings(mysqli $conn): array
{
    try {

        $stmt = $conn->prepare(
            "SELECT id, setting_key, setting_value, setting_group
             FROM settings
             WHERE setting_group = 'custom'
             ORDER BY id ASC"
        );

        if ($stmt === false) {
            error_log(
                '[' . date('Y-m-d H:i:s') . '] Get Custom Settings Prepare Error: '
                    . $conn->error
            );
            return [];
        }

        $stmt->execute();

        $result = $stmt->get_result();

        $settings = [];

        while ($row = $result->fetch_assoc()) {
            $settings[] = $row;
        }

        return $settings;
    } catch (mysqli_sql_exception $e) {

        error_log(
            '[' . date('Y-m-d H:i:s') . '] Get Custom Settings Error: '
                . $e->getMessage()
        );

        return [];
    }
}

/**
 * Fetch the extra, admin-defined key/value settings that belong to a given
 * setting group (e.g. 'general', 'contact', 'seo'), excluding the known
 * built-in keys for that group. Used to populate the "Add More" custom
 * setting rows on the settings form without also showing built-in fields
 * like site_name or site_email as if they were custom entries.
 *
 * @param string[] $knownKeys Built-in setting keys already rendered as their own fields.
 * @return array<int, array{setting_key: string, setting_value: string}>
 */
function getCustomSettingsForGroup(mysqli $conn, string $group, array $knownKeys = []): array
{
    try {
        if (!empty($knownKeys)) {
            $placeholders = implode(',', array_fill(0, count($knownKeys), '?'));
            $sql = "SELECT setting_key, setting_value
                    FROM settings
                    WHERE setting_group = ?
                      AND setting_key NOT IN ($placeholders)
                    ORDER BY id ASC";

            $stmt = $conn->prepare($sql);

            if ($stmt === false) {
                error_log(
                    '[' . date('Y-m-d H:i:s') . '] Get Custom Settings For Group Prepare Error: '
                        . $conn->error
                );
                return [];
            }

            $types = str_repeat('s', count($knownKeys) + 1);
            $params = array_merge([$group], $knownKeys);
            $stmt->bind_param($types, ...$params);
        } else {
            $stmt = $conn->prepare(
                "SELECT setting_key, setting_value
                 FROM settings
                 WHERE setting_group = ?
                 ORDER BY id ASC"
            );

            if ($stmt === false) {
                error_log(
                    '[' . date('Y-m-d H:i:s') . '] Get Custom Settings For Group Prepare Error: '
                        . $conn->error
                );
                return [];
            }

            $stmt->bind_param("s", $group);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        $settings = [];
        while ($row = $result->fetch_assoc()) {
            $settings[] = $row;
        }

        return $settings;
    } catch (mysqli_sql_exception $e) {
        error_log(
            '[' . date('Y-m-d H:i:s') . '] Get Custom Settings For Group Error: '
                . $e->getMessage()
        );
        return [];
    }
}