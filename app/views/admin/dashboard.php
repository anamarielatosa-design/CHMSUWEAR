<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHMSU Wear | Admin Dashboard</title>
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
            --shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
            --border: #e2e8f0;
            /* Admin Highlight Color */
            --admin-red: #ef4444; 
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-light-green);
            color: var(--text-main);
        }

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
            width: 40px; height: 40px; background: #f1f5f9;
            border: 1px solid var(--border); border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; color: var(--text-main); font-size: 14px;
        }

        .container {
            margin-top: var(--header-height);
            padding: 40px 6%;
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto;
        }

        .dashboard-header { margin-bottom: 30px; }
        .dashboard-header h2 { margin: 0; color: var(--chmsu-dark); font-size: 28px; font-weight: 800; }
        .dashboard-header p { margin: 5px 0 0; color: var(--text-light); }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: var(--white);
            padding: 24px;
            border-radius: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: var(--shadow);
            border: 1px solid #f1f5f9;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            border-color: var(--chmsu-green);
            box-shadow: 0 12px 20px rgba(34, 197, 94, 0.1);
        }

        .stat-card div[style*="font-size: 32px"] {
            transition: transform 0.3s ease;
        }

        .stat-card:hover div[style*="font-size: 32px"] {
            transform: scale(1.15);
        }

        .stat-label { display: block; color: var(--text-light); font-size: 13px; font-weight: 600; text-transform: uppercase; }
        .stat-value { display: block; font-size: 28px; font-weight: 800; color: var(--chmsu-dark); margin: 4px 0; }
        .stat-trend { font-size: 11px; font-weight: 700; color: #10b981; }

        .main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 25px;
        }

        .content-card {
            background: var(--white);
            border-radius: 24px;
            padding: 28px;
            box-shadow: var(--shadow);
            border: 1px solid #f1f5f9;
        }

        .card-title { font-size: 18px; font-weight: 800; color: var(--chmsu-dark); margin-bottom: 20px; display: flex; align-items: center; gap: 10px; }

        .admin-table { width: 100%; border-collapse: collapse; }
        .admin-table th { text-align: left; padding: 12px; color: var(--text-light); font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 1px solid #f1f5f9; }
        .admin-table td { padding: 18px 12px; border-bottom: 1px solid #f8fafc; font-size: 14px; }
        
        .status-pill { padding: 5px 12px; border-radius: 8px; font-size: 11px; font-weight: 700; }
        .status-pending { background: #fff7ed; color: #c2410c; }
        .status-approved { background: #f0fdf4; color: #166534; }

        .btn-action { color: var(--chmsu-green); font-weight: 700; text-decoration: none; font-size: 13px; }
        .btn-action:hover { text-decoration: underline; }

        .btn-primary {
            width: 100%; background: var(--chmsu-green); color: white; border: none;
            padding: 16px; border-radius: 14px; font-weight: 700; cursor: pointer;
            transition: 0.2s; font-family: inherit;
        }
        .btn-primary:hover { background: var(--chmsu-dark); transform: translateY(-1px); }

        @media (max-width: 1024px) {
            .main-grid { grid-template-columns: 1fr; }
        }
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
                <span class="user-name">TLV</span>
                <span class="user-role">Admin</span>
            </div>
            <div class="user-avatar">TLV</div>
        </a>
    </header>

    <div class="container">
        <div class="dashboard-header">
            <h2>Admin Overview</h2>
            <p>Monitor campus trade and system health below.</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div>
                    <span class="stat-label">Active Listings</span>
                    <span class="stat-value">482</span>
                    <span class="stat-trend">↑ 5% this week</span>
                </div>
                <div style="font-size: 32px;">👕</div>
            </div>
            <div class="stat-card">
                <div>
                    <span class="stat-label">Pending Review</span>
                    <span class="stat-value">14</span>
                    <span class="stat-trend" style="color: #f59e0b;">Action Required</span>
                </div>
                <div style="font-size: 32px;">⏳</div>
            </div>
            <div class="stat-card">
                <div>
                    <span class="stat-label">Community Growth</span>
                    <span class="stat-value">1,240</span>
                    <span class="stat-trend">↑ 12 new today</span>
                </div>
                <div style="font-size: 32px;">🤝</div>
            </div>
        </div>

        <div class="main-grid">
            <div class="content-card">
                <div class="card-title">🛡️ Moderation Queue</div>
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Seller</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>College Jacket (M)</b></td>
                            <td>R. Alunan</td>
                            <td>₱850</td>
                            <td><span class="status-pill status-pending">Pending</span></td>
                            <td><a href="#" class="btn-action">Review</a></td>
                        </tr>
                        <tr>
                            <td><b>CHMSU Lanyard</b></td>
                            <td>K. Tan</td>
                            <td>₱50</td>
                            <td><span class="status-pill status-pending">Pending</span></td>
                            <td><a href="#" class="btn-action">Review</a></td>
                        </tr>
                        <tr>
                            <td><b>PE Uniform Set (L)</b></td>
                            <td>J. Ramos</td>
                            <td>₱400</td>
                            <td><span class="status-pill status-approved">Approved</span></td>
                            <td><a href="#" class="btn-action">Details</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="content-card">
                <div class="card-title">📢 System Notice!</div>
                <p style="font-size: 14px; color: var(--text-light); line-height: 1.6; margin-bottom: 20px;">
                    Scheduled maintenance: Tonight at 10:00 PM for the real-time chat update. 
                    Ensure all active sessions are saved.
                </p>
                <button class="btn-primary">Post New Announcement</button>
                
                <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #f1f5f9;">
                    <span class="stat-label" style="margin-bottom: 10px;">Quick Links</span>
                    <ul style="list-style: none; padding: 0; font-size: 14px;">
                        <li style="margin-bottom: 12px;"><a href="#" style="text-decoration: none; color: var(--text-main);">📝 Generate Reports</a></li>
                        <li style="margin-bottom: 12px;"><a href="#" style="text-decoration: none; color: var(--text-main);">🚫 Manage Blocked Users</a></li>
                        <li><a href="#" style="text-decoration: none; color: var(--text-main);">💬 View Support Tickets</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>
</html>