<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market | CHMSU Wear</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Toast Notification */
        #cart-toast {
            position: fixed; top: 20px; right: 20px; background: #064e3b; color: white;
            padding: 15px 25px; border-radius: 12px; display: none; z-index: 10001;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1); font-weight: 600;
        }

        /* Cart Floating Button */
        .cart-link { text-decoration: none; }
        .cart-float {
            position: fixed; bottom: 30px; right: 30px;
            background: #16a34a; color: white; width: 60px; height: 60px;
            border-radius: 50%; display: flex; align-items: center;
            justify-content: center; box-shadow: 0 10px 25px rgba(22, 163, 74, 0.3);
            cursor: pointer; z-index: 10000; transition: 0.3s;
        }
        .cart-float:hover { transform: scale(1.1); background: #15803d; }
        .cart-count {
            position: absolute; top: 0; right: 0; background: #064e3b;
            font-size: 10px; padding: 4px 7px; border-radius: 50%; font-weight: 800;
        }

        /* Badge for Pre-loved items */
        .badge-preloved {
            position: absolute; top: 10px; right: 10px; background: #fbbf24; 
            color: #92400e; font-size: 10px; font-weight: 800; 
            padding: 4px 8px; border-radius: 6px;
        }
    </style>
</head>
<body>
    <?php include '../app/views/layouts/header.php'; ?>

    <div id="cart-toast"></div>

    <a href="index.php?page=cart" class="cart-link">
        <div class="cart-float">
            <span style="font-size: 24px;">🛒</span>
            <div class="cart-count" id="global-cart-count">
                <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
            </div>
        </div>
    </a>

    <main class="content">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 35px;">
            <div>
                <h2 style="color: #064e3b; margin: 0; font-weight: 800; font-size: 32px;">Campus Market</h2>
                <p style="color: #64748b; margin: 5px 0 0;">Find official gear and student listings.</p>
            </div>
        </div>

        <div class="product-grid">
            
            <div class="product-card">
                <div class="img-container">
                    <img src="assets/img/varsity_jacket.png" alt="Varsity Jacket" style="width: 70%;">
                </div>
                <div style="padding: 20px;">
                    <span class="category-tag">Apparel</span>
                    <h3 style="margin: 8px 0; color: #1e293b; font-size: 18px;">Varsity Jacket</h3>
                    <div class="price-row" style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                        <span style="font-weight: 800; font-size: 20px; color: #064e3b;">₱1,200</span>
                        <button class="btn-details" onclick="addToCart('Varsity Jacket', 1200)" style="background: #16a34a; color: white; border: none; padding: 8px 16px; border-radius: 10px; font-weight: 700; cursor: pointer;">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="img-container">
                    <img src="assets/img/lanyard.png" alt="Lanyard" style="width: 60%;">
                </div>
                <div style="padding: 20px;">
                    <span class="category-tag">Accessories</span>
                    <h3 style="margin: 8px 0; color: #1e293b; font-size: 18px;">Premium Lanyard</h3>
                    <div class="price-row" style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                        <span style="font-weight: 800; font-size: 20px; color: #064e3b;">₱150</span>
                        <button class="btn-details" onclick="addToCart('Premium Lanyard', 150)" style="background: #16a34a; color: white; border: none; padding: 8px 16px; border-radius: 10px; font-weight: 700; cursor: pointer;">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="img-container">
                    <img src="assets/img/totebag.png" alt="Tote Bag" style="width: 65%;">
                </div>
                <div style="padding: 20px;">
                    <span class="category-tag">Merchandise</span>
                    <h3 style="margin: 8px 0; color: #1e293b; font-size: 18px;">Canvas Tote Bag</h3>
                    <div class="price-row" style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                        <span style="font-weight: 800; font-size: 20px; color: #064e3b;">₱250</span>
                        <button class="btn-details" onclick="addToCart('Canvas Tote Bag', 250)" style="background: #16a34a; color: white; border: none; padding: 8px 16px; border-radius: 10px; font-weight: 700; cursor: pointer;">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="img-container" style="position: relative;">
                    <img src="assets/img/scical.png" alt="Calculator" style="width: 55%;">
                    <span class="badge-preloved">PRE-LOVED</span>
                </div>
                <div style="padding: 20px;">
                    <span class="category-tag">Electronics</span>
                    <h3 style="margin: 8px 0; color: #1e293b; font-size: 18px;">Scientific Calculator</h3>
                    <div class="price-row" style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                        <span style="font-weight: 800; font-size: 20px; color: #064e3b;">₱850</span>
                        <button class="btn-details" onclick="addToCart('Scientific Calculator', 850)" style="background: #16a34a; color: white; border: none; padding: 8px 16px; border-radius: 10px; font-weight: 700; cursor: pointer;">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="img-container">
                    <img src="assets/img/hoodie.png" alt="Hoodie" style="width: 70%;">
                </div>
                <div style="padding: 20px;">
                    <span class="category-tag">Apparel</span>
                    <h3 style="margin: 8px 0; color: #1e293b; font-size: 18px;">Green Spirit Hoodie</h3>
                    <div class="price-row" style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                        <span style="font-weight: 800; font-size: 20px; color: #064e3b;">₱950</span>
                        <button class="btn-details" onclick="addToCart('Green Spirit Hoodie', 950)" style="background: #16a34a; color: white; border: none; padding: 8px 16px; border-radius: 10px; font-weight: 700; cursor: pointer;">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="img-container">
                    <img src="assets/img/kit.png" alt="Kit" style="width: 65%;">
                </div>
                <div style="padding: 20px;">
                    <span class="category-tag">Mechandise</span>
                    <h3 style="margin: 8px 0; color: #1e293b; font-size: 18px;">Drawing Instrument Kit</h3>
                    <div class="price-row" style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                        <span style="font-weight: 800; font-size: 20px; color: #064e3b;">₱1,500</span>
                        <button class="btn-details" onclick="addToCart('Drawing Instrument Kit', 1500)" style="background: #16a34a; color: white; border: none; padding: 8px 16px; border-radius: 10px; font-weight: 700; cursor: pointer;">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>
    </main>

<script>
function addToCart(name, price) {
    let formData = new FormData();
    formData.append('product_name', name);
    formData.append('product_price', price);

    fetch('/CHMSUWEAR/app/controllers/CartController.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(count => {
        const badge = document.getElementById('global-cart-count');
        if(badge) badge.innerText = count;
        
        const toast = document.getElementById('cart-toast');
        if(toast) {
            toast.innerText = `Added ${name} to cart!`;
            toast.style.display = 'block';
            setTimeout(() => toast.style.display = 'none', 3000);
        }
    })
    .catch(err => console.error('Error adding to cart:', err));
}
</script>
</body>
</html>