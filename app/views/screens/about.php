<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | CHMSU Wear</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #16a34a;
            --primary-dark: #064e3b;
            --accent: #dcfce7;
            --text-main: #1e293b;
            --text-light: #64748b;
            --white: #ffffff;
            /* Matches your Settings and Home background */
            --bg: #f8fafc; 
        }

        body { 
            background-color: var(--bg); 
            margin: 0; 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            color: var(--text-main);
        }

        /* Subtle background glow to prevent it looking too "flat" */
        .bg-glow {
            position: fixed;
            top: 0; right: 0;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(22, 163, 74, 0.04) 0%, rgba(248, 250, 252, 0) 70%);
            z-index: -1;
        }

        /* Back Button - Standardized with your UI */
        .back-nav {
            position: fixed; top: 30px; left: 30px; z-index: 100;
        }

        .btn-back {
            display: flex; align-items: center; gap: 10px;
            text-decoration: none; color: var(--primary-dark);
            font-weight: 700; font-size: 14px; padding: 12px 24px;
            background: var(--white);
            border-radius: 16px; border: 1px solid #e2e8f0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
            transition: 0.3s;
        }

        .btn-back:hover {
            background: #f0fdf4; color: var(--primary);
            transform: translateX(-5px); border-color: var(--primary);
        }

        .about-section {
            max-width: 1100px; margin: 120px auto 100px; padding: 0 20px;
        }

        /* Hero Header */
        .about-intro { text-align: center; margin-bottom: 80px; }
        
        .badge {
            background: var(--accent); color: var(--primary);
            padding: 8px 20px; border-radius: 100px;
            font-weight: 800; font-size: 12px; text-transform: uppercase;
            letter-spacing: 1.5px; display: inline-block; margin-bottom: 20px;
        }

        .about-intro h1 { 
            font-size: 52px; font-weight: 800; margin-bottom: 20px; 
            letter-spacing: -1.5px; color: var(--primary-dark);
            line-height: 1.2;
        }

        .gradient-text {
            background: linear-gradient(135deg, #16a34a 0%, #064e3b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-intro p { 
            color: var(--text-light); font-size: 18px; max-width: 650px; 
            margin: 0 auto; line-height: 1.7; 
        }

        /* Information Cards */
        .info-grid {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px; margin-bottom: 100px;
        }

        .info-card {
            background: var(--white); padding: 40px; border-radius: 28px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 30px rgba(6, 78, 59, 0.03);
            transition: 0.3s ease;
        }

        .info-card:hover { transform: translateY(-8px); border-color: var(--primary); }

        .icon-box {
            width: 55px; height: 55px; background: #f0fdf4;
            color: var(--primary); border-radius: 16px;
            display: flex; align-items: center; justify-content: center;
            font-size: 24px; margin-bottom: 20px;
        }

        .info-card h3 { color: var(--primary-dark); font-size: 20px; margin-bottom: 12px; font-weight: 800; }
        .info-card p { color: var(--text-light); line-height: 1.7; font-size: 15px; margin: 0; }

        /* Mission Container */
        .mission-container {
            background: var(--white);
            padding: 60px; border-radius: 32px;
            border: 1px solid #e2e8f0;
            display: flex; align-items: center; gap: 60px;
            margin-bottom: 100px;
            box-shadow: 0 10px 30px rgba(6, 78, 59, 0.03);
        }

        .mission-text h2 { font-size: 34px; color: var(--primary-dark); font-weight: 800; margin-bottom: 20px; }
        .mission-text p { font-size: 16px; color: var(--text-light); line-height: 1.8; }

        .stats-row {
            display: flex; gap: 45px; margin-top: 35px;
            border-top: 1px solid #f1f5f9; padding-top: 30px;
        }

        .stat-item b { display: block; font-size: 30px; color: var(--primary); font-weight: 800; }
        .stat-item span { font-size: 11px; color: var(--text-light); font-weight: 800; text-transform: uppercase; letter-spacing: 1px; }

        /* Tech Section */
        .creators-section { text-align: center; margin-bottom: 100px; }
        .team-grid { 
            display: flex; justify-content: center; gap: 20px; margin-top: 40px; 
        }
        .team-member {
            background: var(--white); padding: 25px; border-radius: 24px; width: 180px;
            border: 1px solid #e2e8f0; transition: 0.3s;
        }
        .team-member:hover { border-color: var(--primary); transform: scale(1.05); }

        .team-img { 
            width: 70px; height: 70px; background: #f0fdf4; 
            border-radius: 20px; margin: 0 auto 15px;
            display: flex; align-items: center; justify-content: center;
            font-size: 28px;
        }

        /* Call to Action Footer */
        .cta-footer {
            background: var(--primary-dark); padding: 70px 40px;
            border-radius: 40px; text-align: center; color: var(--white);
            margin-bottom: 60px;
            box-shadow: 0 20px 40px rgba(6, 78, 59, 0.15);
        }

        .btn-market {
            background: var(--primary); color: var(--white); padding: 18px 45px; 
            border-radius: 18px; text-decoration: none; font-weight: 800;
            display: inline-block; transition: 0.3s; font-size: 16px;
        }

        .btn-market:hover { background: var(--white); color: var(--primary-dark); transform: translateY(-5px); }

        @media (max-width: 850px) {
            .mission-container { flex-direction: column; padding: 40px; text-align: center; }
            .stats-row { flex-wrap: wrap; justify-content: center; gap: 20px; }
            .about-intro h1 { font-size: 38px; }
            .back-nav { top: 20px; left: 20px; }
        }
    </style>
</head>
<body>

    <div class="bg-glow"></div>

    <nav class="back-nav">
        <a href="index.php" class="btn-back">
            <span>←</span> Back to Home
        </a>
    </nav>

    <main class="about-section">
        <div class="about-intro">
            <span class="badge">Platform Info</span>
            <h1>Connecting the <span class="gradient-text">Green Tribe.</span></h1>
            <p>CHMSU Wear is the dedicated marketplace for students to trade gear, share resources, and build a more sustainable campus.</p>
        </div>

        <div class="info-grid">
            <div class="info-card">
                <div class="icon-box">🛡️</div>
                <h3>Secure Network</h3>
                <p>Exclusive to our community. All users are verified CHMSU students, ensuring safe meetups and trusted deals.</p>
            </div>

            <div class="info-card">
                <div class="icon-box">♻️</div>
                <h3>Sustainable Living</h3>
                <p>Reduce your environmental footprint. Resell your pre-loved uniforms and tools to help fellow students.</p>
            </div>

            <div class="info-card">
                <div class="icon-box">🤝</div>
                <h3>Direct Exchange</h3>
                <p>Integrated chat makes it easy to negotiate and arrange meetups anywhere on campus within minutes.</p>
            </div>
        </div>

        <section class="mission-container">
            <div class="mission-text">
                <h2>Our Mission</h2>
                <p>
                    Rooted in the spirit of excellence, CHMSU Wear was created to solve the common student struggle of finding affordable gear and disposing of pre-loved academic materials. We aim to streamline the "Buy and Sell" culture within our university.
                </p>
                
                <div class="stats-row">
                    <div class="stat-item">
                        <b>1.2k+</b>
                        <span>Active Users</span>
                    </div>
                    <div class="stat-item">
                        <b>450+</b>
                        <span>Successful Trades</span>
                    </div>
                    <div class="stat-item">
                        <b>100%</b>
                        <span>Student Build</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="creators-section">
            <h2 style="color: var(--primary-dark); font-weight: 800;">Development Team</h2>
            <p style="color: var(--text-light);">Crafted by the IT Green Talents using modern web standards.</p>
            <div class="team-grid">
                <div class="team-member">
                    <div class="team-img">👨‍💻</div>
                    <h4 style="margin: 0; color: var(--primary-dark);">Ana Marie Latosa</h4>
                    <p style="margin: 5px 0 0; font-size: 11px; color: var(--text-light); font-weight: 700; text-transform: uppercase;">Lead Developer</p>
                </div>
                 <div class="team-member">
                    <div class="team-img">👨‍💻</div>
                    <h4 style="margin: 0; color: var(--primary-dark);">Dianne Algreien Tangub</h4>
                    <p style="margin: 5px 0 0; font-size: 11px; color: var(--text-light); font-weight: 700; text-transform: uppercase;">Developer</p>
                </div>
                 <div class="team-member">
                    <div class="team-img">👨‍💻</div>
                    <h4 style="margin: 0; color: var(--primary-dark);">Kirstin Villarin</h4>
                    <p style="margin: 5px 0 0; font-size: 11px; color: var(--text-light); font-weight: 700; text-transform: uppercase;">Developer</p>
                </div>
                <div class="team-member">
                    <div class="team-img">⚙️</div>
                    <h4 style="margin: 0; color: var(--primary-dark);">Backend</h4>
                    <p style="margin: 5px 0 0; font-size: 11px; color: var(--text-light); font-weight: 700; text-transform: uppercase;">PHP / MVC</p>
                </div>
            </div>
        </section>

        <div class="cta-footer">
            <h2 style="margin-bottom: 15px; font-size: 32px;">Start your first trade today</h2>
            <p style="margin-bottom: 35px; opacity: 0.9; font-size: 16px;">Find what you need or clear out what you don't.</p>
            <a href="index.php?page=market" class="btn-market">Go to Marketplace</a>
        </div>
    </main>

</body>
</html>