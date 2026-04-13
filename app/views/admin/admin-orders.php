<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHMSU Wear | Orders</title>
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
            --shadow: 0 10px 25px rgba(0, 0, 0, 0.03);
        }

        * { box-sizing: border-box; }

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
        /* --- VERTICAL CONTENT --- */
        .container {
            margin-top: var(--header-height);
            padding: 40px 6% 60px;
            max-width: 800px; /* Narrower for vertical readability */
            margin-inline: auto;
        }

        .order-card {
            background: var(--white);
            border-radius: 24px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: var(--shadow);
            border: 1px solid #f1f5f9;
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #f8fafc;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .order-number { font-size: 18px; font-weight: 800; color: var(--chmsu-dark); }
        
        .badge {
            padding: 6px 12px;
            border-radius: 100px;
            font-size: 10px;
            font-weight: 800;
            text-transform: uppercase;
        }
        .badge-paid { background: #dcfce7; color: #166534; }
        .badge-pending { background: #fef9c3; color: #854d0e; }

        .detail-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .detail-item { margin-bottom: 15px; }
        .detail-item.full-width { grid-column: span 2; }

        .label {
            display: block;
            font-size: 11px;
            font-weight: 800;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }

        .value { font-size: 14px; font-weight: 600; color: var(--text-main); margin: 0; }
        .amount-value { color: var(--chmsu-green); font-weight: 800; font-size: 16px; }
        .notes-value { font-style: italic; color: var(--text-light); font-weight: 400; }

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
        <h2 style="margin-bottom: 30px; color: var(--chmsu-dark);">Order Transactions</h2>

        <div class="order-card">
            <div class="order-header">
                <span class="order-number">#CW-2026-8812</span>
                <div>
                    <span class="badge badge-paid">Paid</span>
                    <span class="badge" style="background:#dbeafe; color:#1e40af;">Shipped</span>
                </div>
            </div>

            <div class="detail-grid">
                <div class="detail-item">
                    <span class="label">Internal ID</span>
                    <p class="value">1</p>
                </div>
                <div class="detail-item">
                    <span class="label">User ID</span>
                    <p class="value">USR-449</p>
                </div>
                <div class="detail-item">
                    <span class="label">Total Amount</span>
                    <p class="value amount-value">₱1,250.00</p>
                </div>
                <div class="detail-item">
                    <span class="label">Created At</span>
                    <p class="value">2026-04-05</p>
                </div>
                <div class="detail-item">
                    <span class="label">Deliver At</span>
                    <p class="value">2026-04-08</p>
                </div>
                <div class="detail-item.full-width">
                    <span class="label">Shipping Address</span>
                    <p class="value">Talisay City, Negros Occidental, 6115</p>
                </div>
                <div class="detail-item.full-width">
                    <span class="label">Notes</span>
                    <p class="value notes-value">"Leave at the guard house of the Engineering Building."</p>
                </div>
            </div>
        </div>
        </div>

</body>
</html>