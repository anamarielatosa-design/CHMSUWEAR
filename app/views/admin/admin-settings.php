<?php
// Logic to detect current page for the "active" nav state
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHMSU Wear | Settings</title>
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
            --border: #e2e8f0;
            --admin-red: #ef4444; 
        }

        body {
            margin: 0; padding: 0;
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
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 6%;
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 1000;
            box-sizing: border-box;
        }

        .brand { display: flex; align-items: center; gap: 12px; text-decoration: none; }
        .logo-box {
            width: 42px; height: 42px;
            background-color: var(--chmsu-green);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 4px 12px rgba(34, 197, 94, 0.2);
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

        /* --- USER PROFILE (ADMIN HIGHLIGHT) --- */
        .user-profile { display: flex; align-items: center; gap: 12px; text-decoration: none; color: inherit; }
        .user-info { text-align: right; }
        .user-name { display: block; font-size: 14px; font-weight: 700; color: var(--text-main); }
        
        /* THE RED ADMIN TAG */
        .user-role { 
            font-size: 11px; 
            font-weight: 800; 
            color: var(--admin-red); 
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .user-avatar {
            width: 40px; height: 40px; 
            background: #f1f5f9; 
            border: 1px solid var(--border); 
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; color: var(--text-main); font-size: 14px;
        }
        /* --- SETTINGS FORM AREA --- */
        .container {
            margin-top: calc(var(--header-height) + 40px);
            padding: 0 6% 60px; max-width: 1000px; margin-inline: auto;
        }

        .settings-card {
            background: var(--white); border-radius: 24px; padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02); border: 1px solid #f1f5f9;
        }

        .form-section { margin-bottom: 40px; }
        .form-section h3 { font-size: 20px; font-weight: 800; color: var(--chmsu-dark); margin-bottom: 25px; }

        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .form-group { display: flex; flex-direction: column; gap: 8px; margin-bottom: 20px; }
        .form-group.full-width { grid-column: span 2; }

        label { font-size: 12px; font-weight: 800; color: var(--text-light); text-transform: uppercase; letter-spacing: 0.5px; }
        input {
            padding: 14px 18px; border: 1px solid var(--border); border-radius: 12px;
            font-family: inherit; font-size: 14px; background: #fcfdfe; transition: 0.2s;
        }
        input:focus { border-color: var(--chmsu-green); outline: none; background: white; }

        .btn-save {
            background: var(--chmsu-green); color: white; border: none;
            padding: 14px 28px; border-radius: 12px; font-weight: 700;
            cursor: pointer; transition: 0.2s;
        }
        .btn-save:hover { background: var(--chmsu-dark); transform: translateY(-1px); }
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

    <a href="admin-profile.php" class="user-profile">
        <div class="user-info">
            <span class="user-name">TLV GALS</span>
            <span class="user-role">Admin</span>
        </div>
        <div class="user-avatar">TLV</div>
    </a>
</header>
    <div class="container">
        <div class="settings-card">
            <form action="update_settings.php" method="POST">
                <div class="form-section">
                    <h3>General Information</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Admin Name</label>
                            <input type="text" name="admin_name" value="TVL GALS">
                        </div>
                        <div class="form-group">
                            <label>Staff ID</label>
                            <input type="text" name="staff_id" value="ADM-2026-001" readonly>
                        </div>
                        <div class="form-group full-width">
                            <label>Contact Email</label>
                            <input type="email" name="email" value="tvlgals.admin@chmsu.edu.ph">
                        </div>
                    </div>
                    <button type="submit" class="btn-save">Save Changes</button>
                </div>

                <hr style="border: 0; border-top: 1px solid var(--border); margin: 40px 0;">

                <div class="form-section">
                    <h3>Update Password</h3>
                    <div class="form-group">
                        <label>Current Password</label>
                        <input type="password" placeholder="••••••••">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>