<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHMSU Wear</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <meta http-equiv="refresh" content="3;url=index.php?page=landing">

    <style>
        body.splash-wrapper {
            margin: 0;
            padding: 0;
            background-color: #f0fdf4; /* Matches the login background */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .splash-content {
            text-align: center;
        }

        /* --- THE BRAND LOGO (Matches Login Page) --- */
        .brand-icon-circle {
            width: 80px;
            height: 80px;
            background-color: #16a34a;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 32px;
            font-weight: 800;
            margin: 0 auto 15px;
            box-shadow: 0 10px 25px rgba(22, 163, 74, 0.2);
        }

        .brand-text-stack h3 {
            font-size: 28px;
            font-weight: 800;
            color: #064e3b;
            margin: 0;
            letter-spacing: -0.5px;
        }

        .splash-tagline {
            font-size: 13px;
            color: #16a34a;
            font-style: italic;
            font-weight: 600;
            margin-top: 5px;
            margin-bottom: 30px;
        }

        /* --- LOADING ANIMATION --- */
        .loader-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .loader-dots span {
            width: 10px;
            height: 10px;
            background-color: #16a34a;
            border-radius: 50%;
            display: inline-block;
            animation: bounce 1.4s infinite ease-in-out both;
        }

        .loader-dots span:nth-child(1) { animation-delay: -0.32s; }
        .loader-dots span:nth-child(2) { animation-delay: -0.16s; }

        @keyframes bounce {
            0%, 80%, 100% { transform: scale(0); }
            40% { transform: scale(1.0); }
        }
    </style>
</head>
<body class="splash-wrapper">
    <div class="splash-content">
        
        <div class="brand-icon-circle">CW</div>
        <div class="brand-text-stack">
            <h3>CHMSU Wear</h3>
        </div>
        <p class="splash-tagline">Your Campus. Your Style.</p>

        <div class="loader-dots">
            <span></span><span></span><span></span>
        </div>
        
    </div>
</body>
</html>