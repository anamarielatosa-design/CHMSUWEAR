<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHMSU Wear | Admin Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --chmsu-green: #22c55e;
            --chmsu-dark: #003d29;
            --text-main: #1e293b;
            --text-light: #64748b;
            --white: #ffffff;
            --bg-light-green: #effdf5;
            --header-height: 85px;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            --border: #e2e8f0;
            --admin-red: #ef4444; 
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-light-green);
            color: var(--text-main);
        }

         /* --- HEADER --- */
        header {
            height: var(--header-height);
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
            display: flex; align-items: center; justify-content: space-between;
            padding: 0 6%; position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
            box-sizing: border-box;
        }

        .brand { display: flex; align-items: center; gap: 12px; text-decoration: none; }
        .logo-box {
            width: 42px; height: 42px; background-color: var(--chmsu-green);
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
        }
        .logo-initials { color: var(--white); font-weight: 800; font-size: 18px; }
        
        .brand-text-group { display: flex; flex-direction: column; }
        .brand-name { font-size: 20px; font-weight: 800; color: var(--chmsu-dark); margin: 0; line-height: 1.1; }
        .brand-tagline { font-size: 11px; color: var(--chmsu-green); font-style: italic; font-weight: 600; margin: 0; }

        nav { display: flex; gap: 30px; }
        .nav-link {
            text-decoration: none; color: var(--text-light);
            font-weight: 600; font-size: 15px; transition: 0.3s;
            padding: 8px 4px; position: relative;
        }
        .nav-link:hover { color: var(--chmsu-green); }
        .nav-link.active { color: var(--chmsu-dark); font-weight: 800; }
        .nav-link.active::after {
            content: ''; position: absolute; bottom: -2px; left: 0;
            width: 100%; height: 2px; background-color: var(--chmsu-green); border-radius: 2px;
        }

        /* Logout specific nav style */
        .nav-logout { color: var(--admin-red) !important; }

        .user-profile { display: flex; align-items: center; gap: 12px; text-decoration: none; color: inherit; }
        .user-info { text-align: right; }
        .user-name { display: block; font-size: 14px; font-weight: 700; color: var(--text-main); }
        .user-role { font-size: 11px; font-weight: 800; color: var(--admin-red); text-transform: uppercase; }
        .user-avatar {
            width: 40px; height: 40px; background: #f1f5f9; 
            border: 1px solid var(--border); border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; color: var(--text-main); font-size: 14px;
        }

        /* --- PROFILE CONTENT --- */
        .container {
            margin-top: calc(var(--header-height) + 40px);
            padding: 0 6% 60px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .profile-card {
            background: var(--white);
            border-radius: 32px;
            overflow: hidden;
            box-shadow: var(--shadow);
            border: 1px solid #f1f5f9;
        }

        .profile-cover {
            height: 160px;
            background: linear-gradient(135deg, var(--chmsu-dark), var(--chmsu-green));
            position: relative;
        }

        .profile-body {
            padding: 0 50px 50px;
            text-align: center;
            position: relative;
        }

        .avatar-wrapper {
            width: 130px;
            height: 130px;
            background: var(--white);
            border-radius: 50%;
            margin: -65px auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 6px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        .avatar-main {
            width: 100%;
            height: 100%;
            background: #f1f5f9;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 42px;
            font-weight: 800;
            color: var(--chmsu-dark);
            border: 2px solid var(--bg-light-green);
        }

        .profile-name { font-size: 28px; font-weight: 800; color: var(--chmsu-dark); margin: 0; }
        .profile-badge {
            display: inline-block;
            margin-top: 8px;
            padding: 6px 16px;
            background: #fff1f2;
            color: var(--admin-red);
            font-size: 12px;
            font-weight: 800;
            border-radius: 100px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .profile-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            margin: 40px 0;
            padding: 25px 0;
            border-top: 1px solid #f1f5f9;
            border-bottom: 1px solid #f1f5f9;
        }

        .stat-item h4 { margin: 0; font-size: 22px; font-weight: 800; color: var(--chmsu-dark); }
        .stat-item p { margin: 5px 0 0; font-size: 12px; font-weight: 600; color: var(--text-light); text-transform: uppercase; }

        .info-grid {
            text-align: left;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-top: 20px;
        }

        .info-box label {
            display: block;
            font-size: 11px;
            font-weight: 800;
            color: var(--text-light);
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .info-box p {
            margin: 0;
            font-size: 15px;
            font-weight: 600;
            color: var(--text-main);
        }

        .action-buttons {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .btn-edit {
            background: var(--chmsu-dark);
            color: white;
            padding: 14px 40px;
            border-radius: 14px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-logout {
            background: #fff1f2;
            color: var(--admin-red);
            padding: 14px 40px;
            border-radius: 14px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            border: 1px solid #fee2e2;
            transition: 0.3s;
        }

        .btn-edit:hover { background: var(--chmsu-green); transform: translateY(-2px); }
        .btn-logout:hover { background: var(--admin-red); color: white; transform: translateY(-2px); }
    </style>
</head>
<body>

    <header>
        <a href="dashboard.php" class="brand">
            <div class="logo-box"><span class="logo-initials">CW</span></div>
            <div class="brand-text-group">
                <h1 class="brand-name">CHMSU Wear</h1>
                <p class="brand-tagline">Your campus. Your style.</p>
            </div>
        </a>
        <nav>
            <a href="dashboard.php" class="nav-link <?= ($current_page == 'dashboard.php') ? 'active' : '' ?>">Dashboard</a>
            <a href="marketplace.php" class="nav-link <?= ($current_page == 'marketplace.php') ? 'active' : '' ?>">Marketplace</a>
            <a href="admin-orders.php" class="nav-link <?= ($current_page == 'admin-orders.php') ? 'active' : '' ?>">Orders</a>
            <a href="admin-settings.php" class="nav-link <?= ($current_page == 'admin-settings.php') ? 'active' : '' ?>">Settings</a>
        </nav>
        <div style="width: 42px;"></div> 
    </header>

    <div class="container">
        <div class="profile-card">
            <div class="profile-cover"></div>
            <div class="profile-body">
                <div class="avatar-wrapper">
                    <div class="avatar-main">TLV</div>
                </div>
                
                <h2 class="profile-name">TLV GALS</h2>
                <span class="profile-badge">System Administrator</span>

                <div class="profile-stats">
                    <div class="stat-item">
                        <h4>1,248</h4>
                        <p>Items Approved</p>
                    </div>
                    <div class="stat-item">
                        <h4>42</h4>
                        <p>Reports Resolved</p>
                    </div>
                    <div class="stat-item">
                        <h4>2.4k</h4>
                        <p>Users Managed</p>
                    </div>
                </div>

                <div class="info-grid">
                    <div class="info-box">
                        <label>Email Address</label>
                        <p>tvlgals.admin@chmsu.edu.ph</p>
                    </div>
                    <div class="info-box">
                        <label>Staff ID</label>
                        <p>ADM-2026-001</p>
                    </div>
                    <div class="info-box">
                        <label>Department</label>
                        <p>Student Services / IT Office</p>
                    </div>
                    <div class="info-box">
                        <label>Last Login</label>
                        <p>April 4, 2026 - 9:43 PM</p>
                    </div>
                </div>

                <div class="action-buttons">
                    <a href="admin-setting.php" class="btn-edit">Edit Profile Settings</a>
                    <a href="index.php" class="btn-logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>