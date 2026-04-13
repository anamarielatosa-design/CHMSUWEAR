<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHMSU Wear | Marketplace Management</title>
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
            --danger: #ef4444;
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

        /* --- CONTENT AREA --- */
        .container {
            margin-top: var(--header-height);
            padding: 40px 6%;
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 30px;
        }

        .page-header h2 { margin: 0; color: var(--chmsu-dark); font-size: 28px; font-weight: 800; }
        .page-header p { margin: 5px 0 0; color: var(--text-light); }

        /* Filter Bar */
        .filter-bar {
            background: var(--white);
            padding: 15px 25px;
            border-radius: 20px;
            display: flex;
            gap: 20px;
            align-items: center;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
            border: 1px solid #f1f5f9;
        }

        .search-input {
            flex: 1;
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 12px;
            font-family: inherit;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
        }
        .search-input:focus { border-color: var(--chmsu-green); background: #fcfdfd; }

        .filter-select {
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 12px;
            font-family: inherit;
            background: var(--white);
            cursor: pointer;
            outline: none;
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .product-card {
            background: var(--white);
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid #f1f5f9;
            box-shadow: var(--shadow);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        }

        .product-image {
            width: 100%;
            height: 200px;
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
        }

        .product-details { padding: 20px; }
        
        .category-tag {
            font-size: 10px;
            font-weight: 800;
            text-transform: uppercase;
            color: var(--chmsu-green);
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            display: block;
        }

        .product-name {
            font-size: 17px;
            font-weight: 800;
            color: var(--chmsu-dark);
            margin: 0 0 5px 0;
        }

        .product-price {
            font-size: 18px;
            font-weight: 700;
            color: var(--chmsu-green);
            margin-bottom: 15px;
        }

        .seller-info {
            display: flex;
            align-items: center;
            gap: 10px;
            padding-top: 15px;
            border-top: 1px solid #f1f5f9;
            margin-bottom: 15px;
        }

        .seller-avatar {
            width: 24px; height: 24px;
            background: var(--bg-light-green);
            border-radius: 50%;
            font-size: 10px;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700;
        }

        .seller-name { font-size: 12px; color: var(--text-light); }

        .admin-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .btn-edit, .btn-delete {
            border: none;
            padding: 10px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 12px;
            cursor: pointer;
            transition: 0.2s;
            font-family: inherit;
        }

        .btn-edit { background: #f1f5f9; color: var(--text-main); }
        .btn-delete { background: #fee2e2; color: var(--danger); }

        .btn-primary {
            background: var(--chmsu-green);
            color: white;
            border: none;
            padding: 16px 32px;
            border-radius: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.2s;
            font-family: inherit;
            text-decoration: none;
            display: inline-block;
        }
        .btn-primary:hover { background: var(--chmsu-dark); }

        /* Bottom Action Container */
        .bottom-actions {
            display: flex;
            justify-content: center;
            padding: 20px 0 60px 0;
            border-top: 1px dashed var(--border);
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
        <div class="page-header">
            <div>
                <h2>Marketplace Listings</h2>
                <p>Manage and moderate all active products on the platform.</p>
            </div>
            <div style="font-size: 13px; font-weight: 700; color: var(--chmsu-green); background: var(--white); padding: 10px 20px; border-radius: 100px; box-shadow: var(--shadow); border: 1px solid #f1f5f9;">
                Total: 482 Items
            </div>
        </div>

        <div class="filter-bar">
            <input type="text" class="search-input" placeholder="Search by item name...">
            <select class="filter-select">
                <option>All Categories</option>
                <option>Uniforms</option>
                <option>Accessories</option>
            </select>
            <select class="filter-select">
                <option>Sort by: Newest</option>
            </select>
        </div>

        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">🧥</div>
                <div class="product-details">
                    <span class="category-tag">Uniforms</span>
                    <h3 class="product-name">College Jacket</h3>
                    <div class="product-price">₱850.00</div>
                    <div class="seller-info">
                        <div class="seller-avatar">RA</div>
                        <span class="seller-name">Listed by R. Alunan</span>
                    </div>
                    <div class="admin-actions">
                        <button class="btn-edit">Edit</button>
                        <button class="btn-delete">Delete</button>
                    </div>
                </div>
            </div>

            <div class="product-card" style="border: 1px solid var(--chmsu-green);">
                <div class="product-image">🛠️</div>
                <div class="product-details">
                    <span class="category-tag" style="color: var(--chmsu-dark);">Official Store</span>
                    <h3 class="product-name">Varsity Jacket</h3>
                    <div class="product-price">₱1,500.00</div>
                    <div class="seller-info">
                        <div class="seller-avatar" style="background: var(--chmsu-green); color: white;">TLV</div>
                        <span class="seller-name">Listed by Admin</span>
                    </div>
                    <div class="admin-actions">
                        <button class="btn-edit">Edit</button>
                        <button class="btn-delete">Delete</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">🧥</div>
                <div class="product-details">
                    <span class="category-tag">Uniforms</span>
                    <h3 class="product-name">College Jacket</h3>
                    <div class="product-price">₱850.00</div>
                    <div class="seller-info">
                        <div class="seller-avatar">RA</div>
                        <span class="seller-name">Listed by R. Alunan</span>
                    </div>
                    <div class="admin-actions">
                        <button class="btn-edit">Edit</button>
                        <button class="btn-delete">Delete</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">🆔</div>
                <div class="product-details">
                    <span class="category-tag">Accessories</span>
                    <h3 class="product-name">CHMSU Lanyard (Green)</h3>
                    <div class="product-price">₱50.00</div>
                    <div class="seller-info">
                        <div class="seller-avatar">KT</div>
                        <span class="seller-name">Listed by K. Tan</span>
                    </div>
                    <div class="admin-actions">
                        <button class="btn-edit">Edit</button>
                        <button class="btn-delete">Delete</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">👕</div>
                <div class="product-details">
                    <span class="category-tag">Uniforms</span>
                    <h3 class="product-name">PE T-Shirt (Large)</h3>
                    <div class="product-price">₱250.00</div>
                    <div class="seller-info">
                        <div class="seller-avatar">JR</div>
                        <span class="seller-name">Listed by J. Ramos</span>
                    </div>
                    <div class="admin-actions">
                        <button class="btn-edit">Edit</button>
                        <button class="btn-delete">Delete</button>
                    </div>
                </div>
            </div>

        <div class="bottom-actions">
            <button type="button" class="btn-primary" style="box-shadow: 0 10px 20px rgba(34, 197, 94, 0.2);">
                + Add Official Item
            </button>
        </div>
    </div>

</body>
</html>