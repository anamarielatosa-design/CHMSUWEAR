<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CHMSU Wear</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Quick Additions for Home Styling */
        .trust-bar {
            display: flex; justify-content: space-around; padding: 30px 0;
            background: white; border-radius: 20px; margin: 40px 0;
            border: 1px solid #f1f5f9; text-align: center;
        }
        .trust-item h4 { margin: 5px 0 0; color: #064e3b; font-size: 14px; }
        .trust-item p { font-size: 12px; color: #64748b; margin: 0; }

        .category-scroll {
            display: flex; gap: 15px; overflow-x: auto; padding: 10px 0 30px;
            scrollbar-width: none;
        }
        .cat-pill {
            background: white; padding: 12px 24px; border-radius: 50px;
            border: 1px solid #e2e8f0; font-weight: 700; color: #1e293b;
            white-space: nowrap; cursor: pointer; transition: 0.3s;
        }
        .cat-pill:hover { border-color: #16a34a; color: #16a34a; }
    </style>
</head>
<body>
    <?php include '../app/views/layouts/header.php'; ?>

    <main class="content">
        <section class="promo-banner">
            <div class="banner-text">
                <span class="badge">NEW ARRIVAL</span>
                <h1>2026 Varsity Collection</h1>
                <p>Represent Alijis Campus with the latest premium gear.</p>
                <a href="index.php?page=market" class="btn-shop" style="margin-top: 20px; display: inline-block;">Shop Now</a>
            </div>
        </section>

        <div class="trust-bar">
            <div class="trust-item">
                <span>🛡️</span>
                <h4>Safe Trading</h4>
                <p>Verified Student Users</p>
            </div>
            <div class="trust-item">
                <span>📍</span>
                <h4>Campus Pickup</h4>
                <p>Easy Hand-over</p>
            </div>
            <div class="trust-item">
                <span>🌱</span>
                <h4>Sustainable</h4>
                <p>Pre-loved Gear</p>
            </div>
        </div>

        <section>
            <h2 class="section-title">Browse Categories</h2>
            <div class="category-scroll">
                <div class="cat-pill">👕 Apparel</div>
                <div class="cat-pill">🎒 Accessories</div>
                <div class="cat-pill">📚 Merchandise</div>
                <div class="cat-pill">💻 Electronics</div>
            </div>
        </section>

        <section>
            <div class="section-header">
                <h2 class="section-title">Featured Items</h2>
                <a href="index.php?page=market" class="view-all">View All →</a>
            </div>

            <div class="product-grid">
                <div class="product-card">
                    <div class="img-container">
                        <img src="assets/img/varsity_jacket.png" alt="Varsity Jacket">
                    </div>
                    <div class="product-info">
                        <span class="category-tag">Apparel</span>
                        <h3>Varsity Jacket</h3>
                        <div class="price-row">
                            <span class="price">₱1,200</span>
                            <button class="btn-details">Details</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="img-container">
                        <img src="assets/img/lanyard.png" alt="Lanyard">
                    </div>
                    <div class="product-info">
                        <span class="category-tag">Accessories</span>
                        <h3>CHMSU Premium Lanyard</h3>
                        <div class="price-row">
                            <span class="price">₱150</span>
                            <button class="btn-details">Details</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="img-container">
                        <img src="assets/img/totebag.png" alt="Tote">
                    </div>
                    <div class="product-info">
                        <span class="category-tag">Merchandise</span>
                        <h3>Canvas Tote Bag</h3>
                        <div class="price-row">
                            <span class="price">₱250</span>
                            <button class="btn-details">Details</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="img-container">
                        <img src="assets/img/scical.png" alt="Calculator">
                        <span style="position: absolute; top: 10px; right: 10px; background: #fbbf24; color: #92400e; font-size: 10px; font-weight: 800; padding: 4px 8px; border-radius: 6px;">PRE-LOVED</span>
                    </div>
                    <div class="product-info">
                        <span class="category-tag">Electronics</span>
                        <h3>Scientific Calculator</h3>
                        <div class="price-row">
                            <span class="price">₱850</span>
                            <button class="btn-details">Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>