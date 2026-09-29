<style>
    .office-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        flex-direction: column;
        gap: 20px;
        padding: 40px 10px;
        font-family: Arial, sans-serif;
        background-color: #fff;
        max-width: 900px;
        margin: 0 auto;
    }

    .office-card {
        display: flex;
        align-items: center;
        gap: 25px;
        border: none;
        padding: 25px 30px;
        width: 100%;
        background-color: #f8f8fc;
        box-sizing: border-box;
        border-radius: 12px;
    }

    .icon-container {
        flex-shrink: 0;
        width: 70px;
        height: 70px;
        background-color: #ff6600;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 26px;
    }

    .office-content {
        text-align: left;
    }

    .office-title {
        font-size: 16px;
        font-weight: bold;
        letter-spacing: 0.5px;
        margin-bottom: 6px;
        color: #111;
    }

    .address-text {
        font-size: 14px;
        color: #444;
        line-height: 1.5;
    }

    /* Responsive Design for Mobile */
    @media (max-width: 768px) {
        .office-card {
            flex-direction: column;
            text-align: center;
        }
        .office-content {
            text-align: center;
        }
    }
</style>

<div class="office-section">
    <!-- Head Office Card -->
    <div class="office-card">
        <div class="icon-container">
            <i class="fa-solid fa-building-columns"></i>
        </div>
        <div class="office-content">
            <div class="office-title">BRANCH OFFICE ( Lucknow )</div>
            <div class="address-text">207, C Tower BCC Greens, Naubasta Kala, Deva Rd, Lucknow, Uttar Pradesh 226028</div>
        </div>
    </div>

    <!-- Branch Office Card -->
    <div class="office-card">
        <div class="icon-container">
            <i class="fa-solid fa-city"></i>
        </div>
        <div class="office-content">
            <div class="office-title">BRANCH OFFICE ( Patna ) </div>
            <div class="address-text">BO: A/3, P C Colony, Kankarbagh Near Chandan Hero Agency, Patna 800020 Bihar INDIA</div>
        </div>
    </div>
</div>