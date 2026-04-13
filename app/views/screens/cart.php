<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart | CHMSU Wear</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { background: #f8fafc; margin: 0; font-family: 'Plus Jakarta Sans', sans-serif; }
        
        /* New Top Navigation Wrapper */
        .cart-nav-wrapper {
            max-width: 1100px; /* Wider than the cart for a professional look */
            margin: 30px auto 0;
            padding: 0 20px;
        }

        .btn-back-market {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #16a34a;
            font-weight: 700;
            font-size: 14px;
            background: white;
            padding: 10px 16px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            transition: 0.3s;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }

        .btn-back-market:hover {
            background: #f0fdf4;
            transform: translateX(-5px);
            border-color: #16a34a;
        }

        .cart-container { max-width: 800px; margin: 20px auto 80px; padding: 20px; }
        
        .cart-item { 
            background: white; padding: 20px; border-radius: 20px; 
            display: flex; justify-content: space-between; align-items: center;
            margin-bottom: 15px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px rgba(0,0,0,0.02);
        }

        .qty-controls { display: flex; align-items: center; gap: 10px; margin-top: 10px; }
        .btn-qty { 
            background: #f1f5f9; border: none; width: 32px; height: 32px; 
            border-radius: 10px; cursor: pointer; font-weight: 800; color: #475569;
            text-decoration: none; display: flex; justify-content: center; align-items: center;
        }
        .btn-qty:hover { background: #e2e8f0; color: #1e293b; }
        
        .btn-remove { 
            color: #ef4444; background: none; border: none; 
            font-size: 12px; font-weight: 700; cursor: pointer; padding: 0;
            margin-left: 15px;
        }
        .btn-remove:hover { text-decoration: underline; }

        .btn-checkout {
            background: #16a34a; color: white; width: 100%; padding: 18px;
            border-radius: 16px; font-weight: 800; border: none; cursor: pointer; font-size: 16px;
            transition: 0.3s;
            box-shadow: 0 4px 12px rgba(22, 163, 74, 0.2);
        }
        .btn-checkout:hover { background: #15803d; transform: translateY(-2px); }
        
        .clear-link-container { text-align: right; margin-bottom: 15px; }
    </style>
</head>
<body>
    <?php include '../app/views/layouts/header.php'; ?>

    <div class="cart-nav-wrapper">
        <a href="index.php?page=market" class="btn-back-market">
            <span>←</span> Back to Market
        </a>
    </div>

    <div class="cart-container">
        <div style="margin-bottom: 30px;">
            <h2 style="color: #064e3b; font-weight: 800; margin: 0; font-size: 28px;">Your Shopping Cart</h2>
            <p style="color: #64748b; margin-top: 5px;">Review your items before proceeding to checkout.</p>
        </div>

        <?php if (!empty($_SESSION['cart'])): ?>
            
            <div class="clear-link-container">
                <a href="app/controllers/CartController.php?action=clear" style="color: #ef4444; font-size: 13px; text-decoration: none; font-weight: 600;">🗑️ Clear All Items</a>
            </div>

            <?php 
            $total = 0; 
            foreach ($_SESSION['cart'] as $id => $item): 
                $sub = $item['price'] * $item['qty']; 
                $total += $sub; 
            ?>
                <div class="cart-item">
                    <div style="flex: 1;">
                        <h3 style="margin: 0; color: #1e293b; font-size: 18px; font-weight: 700;"><?php echo $item['name']; ?></h3>
                        <p style="color: #64748b; font-size: 14px; margin: 4px 0;">₱<?php echo number_format($item['price']); ?> per unit</p>
                        
                        <div class="qty-controls">
                            <a href="app/controllers/CartController.php?action=update&id=<?php echo $id; ?>&op=dec" class="btn-qty">-</a>
                            <span style="font-weight: 700; color: #1e293b; font-size: 16px;"><?php echo $item['qty']; ?></span>
                            <a href="app/controllers/CartController.php?action=update&id=<?php echo $id; ?>&op=inc" class="btn-qty">+</a>
                            
                            <a href="app/controllers/CartController.php?action=remove&id=<?php echo $id; ?>" class="btn-remove">Remove</a>
                        </div>
                    </div>
                    
                    <div style="text-align: right;">
                        <div style="font-weight: 800; font-size: 22px; color: #064e3b;">
                            ₱<?php echo number_format($sub); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div style="background: #064e3b; color: white; padding: 35px; border-radius: 24px; margin-top: 35px; box-shadow: 0 10px 25px rgba(6, 78, 59, 0.15);">
                <div style="display: flex; justify-content: space-between; margin-bottom: 25px; align-items: center;">
                    <span style="font-size: 18px; opacity: 0.85; font-weight: 600;">Order Total:</span>
                    <span style="font-size: 32px; font-weight: 800;">₱<?php echo number_format($total); ?></span>
                </div>
                <button class="btn-checkout" onclick="location.href='index.php?page=payment'">Proceed to Payment</button>
            </div>

        <?php else: ?>
            <div style="text-align: center; padding: 80px 40px; background: white; border-radius: 24px; border: 1px solid #e2e8f0; box-shadow: 0 4px 10px rgba(0,0,0,0.02);">
                <div style="font-size: 64px; margin-bottom: 20px;">🛒</div>
                <h3 style="color: #1e293b; margin-bottom: 10px;">Your cart is empty</h3>
                <p style="color: #64748b; font-size: 16px; margin-bottom: 30px;">Looks like you haven't added any campus gear yet.</p>
                <a href="index.php?page=market" style="background: #16a34a; color: white; padding: 14px 30px; border-radius: 12px; font-weight: 800; text-decoration: none; display: inline-block; transition: 0.3s;">Browse Market</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>