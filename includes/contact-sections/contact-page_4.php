<style>
        .office-section {
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 50px 20px;
            font-family: Arial, sans-serif;
            background-color: #fff;
            flex-wrap: wrap;
        }

        .office-card {
            border: 1px dotted #ccc;
            padding: 40px 30px;
            width: 100%;
            max-width: 480px;
            background-color: #f6f6f6ff;
            text-align: center;
            box-sizing: border-box;
            border-radius: 15px;
        }

        .icon-container {
            width: 75px;
            height: 75px;
            border: 2px solid #ff6600;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
            color: #ff6600;
            font-size: 30px;
        }

        .office-title {
            font-size: 15px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 15px;
            color: #111;
        }

        .company-name {
            font-size: 16px;
            font-weight: bold;
            color: #000;
            margin-bottom: 5px;
        }

        .unit-text, .address-text, .location-text {
            font-size: 14px;
            color: #333;
            line-height: 1.6;
            margin-bottom: 5px;
        }

        .contact-info {
            margin-top: 25px;
            font-size: 14px;
            color: #222;
        }

        .contact-info p {
            margin: 6px 0;
        }

        .contact-info a {
            color: #222;
            text-decoration: none;
        }

        .contact-info a:hover {
            color: #ff6600;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .office-section {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

    <div class="office-section">
        <!-- Head Office Card -->
        <div class="office-card">
            <div class="icon-container">
                <i class="fa-solid fa-building-columns"></i>
            </div>
            <div class="office-title">HEAD OFFICE</div>
            <div class="company-name">KING DIGITAL PVT. LTD.</div>
            <div class="unit-text">(A unit of King Digital Pvt. Ltd.)</div>
            <div class="address-text">2nd Floor, Plot no- 456, Kakrola Housing complex,</div>
            <div class="address-text">Opposite Metro Pillar 796, Dwarka Mor, New Delhi-110078</div>
            <div class="location-text">INDIA</div>
            
            <div class="contact-info">
                <p>Phone : <a href="tel:+919211339966">+91-9211-33-9966</a></p>
                <p>Email : <a href="mailto:info@kingdigital.in">info@kingdigital.in</a></p>
            </div>
        </div>

        <!-- Branch Office Card -->
        <div class="office-card">
            <div class="icon-container">
                <i class="fa-solid fa-city"></i>
            </div>
            <div class="office-title">BRANCH OFFICE</div>
            <div class="company-name">KING DIGITAL PVT. LTD.</div>
            <div class="unit-text">(A unit of King Digital Pvt. Ltd.)</div>
            <div class="address-text">BO: A/3, P C Colony, Kankarbagh</div>
            <div class="address-text">Near Chandan Hero Agency,</div>
            <div class="address-text">Patna 800020 Bihar</div>
            <div class="location-text">INDIA</div>
            
            <div class="contact-info">
                <p>Phone : <a href="tel:+919211339966">+91-9211-33-9966</a></p>
                <p>Email : <a href="mailto:info@kingdigital.in">info@kingdigital.in</a></p>
            </div>
        </div>
    </div>