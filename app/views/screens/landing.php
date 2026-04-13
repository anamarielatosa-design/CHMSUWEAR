<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHMSU Wear | Official Campus Marketplace</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root { --primary: #16a34a; --dark: #064e3b; --accent: #4ade80; }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Plus Jakarta Sans', sans-serif; }
        
        body { background: #fff; color: var(--dark); overflow-x: hidden; }

        /* Navigation */
        nav { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 25px 8%; 
            position: absolute; 
            width: 100%; 
            z-index: 10; 
        }
        .logo { font-weight: 800; font-size: 1.5rem; letter-spacing: -1px; text-decoration: none; color: var(--dark); }
        .logo span { color: var(--primary); }
        
        .nav-links { display: flex; gap: 30px; align-items: center; }
        .nav-links a { text-decoration: none; color: var(--dark); font-weight: 700; transition: 0.3s; }
        .nav-links a:hover { color: var(--primary); }

        /* Hero Section */
        .hero { display: flex; align-items: center; height: 100vh; padding: 0 8%; background: linear-gradient(135deg, #f0fdf4 0%, #ffffff 100%); }
        .hero-content { flex: 1; animation: fadeInUp 0.8s ease; }
        .hero-image { flex: 1; display: flex; justify-content: flex-end; position: relative; }
        
        .hero-image div { 
            width: 450px; height: 550px; 
            background: #dcfce7; border-radius: 30px; 
            box-shadow: 20px 20px 60px rgba(0,0,0,0.05);
            /* High-quality campus/student-themed photo */
            background-image: url('../public/assets/img/building.jpg');
            background-size: cover; background-position: center;
        }

        h1 { font-size: 4.5rem; line-height: 1.1; margin-bottom: 20px; font-weight: 800; }
        p.desc { font-size: 1.2rem; color: #4b5563; margin-bottom: 40px; max-width: 500px; line-height: 1.6; }

        .cta-group { display: flex; gap: 20px; }
        .btn { padding: 18px 35px; border-radius: 12px; font-weight: 700; text-decoration: none; transition: 0.3s; display: inline-block; }
        .btn-primary { background: var(--primary); color: white; box-shadow: 0 10px 20px rgba(22, 163, 74, 0.2); }
        .btn-primary:hover { transform: translateY(-3px); background: var(--dark); }
        .btn-outline { border: 2px solid var(--primary); color: var(--primary); }
        .btn-outline:hover { background: #f0fdf4; transform: translateY(-3px); }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Mobile Responsiveness */
        @media (max-width: 992px) {
            h1 { font-size: 3rem; }
            .hero-image { display: none; }
            .hero { text-align: center; justify-content: center; }
            .cta-group { justify-content: center; }
            .desc { margin: 0 auto 40px; }
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php" class="logo">CHMSU<span>WEAR.</span></a>
        <div class="nav-links">
            <a href="index.php?page=login">Sign In</a>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <h1>Your Campus.<br>Your Style.</h1>
            <p class="desc">The official marketplace for CHMSU students. Buy uniforms, sell merch, and represent your tribe with excellence.</p>
            <div class="cta-group">
                <a href="index.php?page=login" class="btn btn-primary">Get Started</a>
                <a href="index.php?page=about" class="btn btn-outline">Learn More</a>
            </div>
        </div>
        <div class="hero-image">
            <div></div>
        </div>
    </section>
</body>
</html>