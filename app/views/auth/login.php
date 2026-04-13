<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CHMSU Wear</title>
    <link rel="stylesheet" href="/CHMSUWEAR/public/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* CSS for the new logo branding */
        .brand-logo-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
        }

        .brand-icon-circle {
            width: 70px;
            height: 70px;
            background-color: #16a34a;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
            font-weight: 800;
            box-shadow: 0 8px 20px rgba(22, 163, 74, 0.15);
            margin-bottom: 15px;
        }

        .brand-text-stack {
            text-align: center;
        }

        .brand-text-stack h3 {
            font-size: 26px;
            font-weight: 800;
            color: #064e3b;
            margin: 0;
            line-height: 1.2;
        }

        .brand-text-stack p {
            font-size: 12px;
            color: #16a34a;
            font-style: italic;
            font-weight: 600;
            margin: 0;
        }
    </style>
</head>
<body class="auth-page">
    <div class="auth-container">
        
        <div class="auth-visual">
            <div class="overlay"></div>
            <div class="visual-content">
                <div class="badge">Alijis Campus Feed</div>
                <h1>Welcome <br><span>Back.</span></h1>
                <p>Wear your pride. Join the marketplace dedicated to the CHMSU community.</p>
            </div>
        </div>

        <div class="auth-form-section">
            <div class="form-box">
                
                <div class="brand-logo-wrapper">
                    <div class="brand-icon-circle">CW</div>
                    <div class="brand-text-stack">
                        <h3>CHMSU Wear</h3>
                        <p>Your campus. Your style.</p>
                    </div>
                </div>

                <div style="margin-bottom: 25px;">
                    <h2 style="font-size: 22px; font-weight: 800; color: #1e293b;">Welcome Back</h2>
                    <p style="color: #64748b; font-size: 14px;">Sign in to your account</p>
                </div>

                <form action="index.php?page=home" method="POST">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="you@chmsu.edu.ph" required>
                    </div>
                    
                    <div class="form-group">
                        <div class="label-row" style="display: flex; justify-content: space-between;">
                            <label>Password</label>
                            <a href="#" style="font-size: 12px; color: #16a34a; text-decoration: none; font-weight: 600;">Forgot?</a>
                        </div>
                        <input type="password" name="password" placeholder="••••••••" required>
                    </div>

                    <button type="submit" class="btn-primary-new">Log In</button>
                </form>

                <div class="form-footer" style="margin-top: 25px; text-align: center;">
                    <p style="font-size: 14px; color: #64748b;">Don't have an account? <a href="index.php?page=register" style="color: #16a34a; font-weight: 700; text-decoration: none;">Create One</a></p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>