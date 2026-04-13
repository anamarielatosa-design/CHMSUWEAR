<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start(); 
}
$current_page = 'cart'; 

if (empty($_SESSION['cart'])) {
    header("Location: index.php?page=market");
    exit();
}

$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += ($item['price'] * $item['qty']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Payment | CHMSU Wear</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { background-color: #f8fafc; margin: 0; font-family: 'Plus Jakarta Sans', sans-serif; }
        
        .payment-container {
            max-width: 1100px;
            margin: 20px auto 60px;
            padding: 0 20px;
        }

        /* Back Button Styling (Outside the card) */
        .back-nav {
            margin-bottom: 25px;
            display: inline-block;
        }

        .btn-back-link {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #064e3b;
            font-weight: 700;
            font-size: 14px;
            padding: 10px 18px;
            background: white;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }

        .btn-back-link:hover {
            background: #f0fdf4;
            color: #16a34a;
            border-color: #16a34a;
            transform: translateX(-5px);
        }

        .payment-wrapper {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 30px;
            align-items: flex-start;
        }

        .payment-card {
            background: white;
            padding: 40px;
            border-radius: 28px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 30px rgba(6, 78, 59, 0.04);
        }

        .order-summary-card {
            background: #064e3b;
            color: white;
            padding: 30px;
            border-radius: 28px;
            position: sticky;
            top: 100px;
            box-shadow: 0 10px 25px rgba(6, 78, 59, 0.15);
        }

        h2 { color: #064e3b; margin: 0 0 10px 0; font-weight: 800; font-size: 28px; }
        .summary-title { color: white; font-size: 20px; margin-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 15px; font-weight: 800; }

        .method-option {
            border: 2px solid #f1f5f9;
            border-radius: 18px;
            padding: 20px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        .method-option:hover { border-color: #16a34a; background: #f0fdf4; }

        .method-option input[type="radio"] {
            accent-color: #16a34a;
            transform: scale(1.3);
        }

        .method-details b { display: block; color: #1e293b; font-size: 15px; }
        .method-details span { color: #64748b; font-size: 13px; }

        .summary-item {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            margin-bottom: 12px;
            opacity: 0.9;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.2);
            font-size: 24px;
            font-weight: 800;
        }

        .btn-pay {
            width: 100%;
            background: #16a34a;
            color: white;
            padding: 18px;
            border: none;
            border-radius: 16px;
            font-weight: 800;
            font-size: 16px;
            cursor: pointer;
            margin-top: 30px;
            transition: 0.3s;
            box-shadow: 0 4px 12px rgba(22, 163, 74, 0.2);
        }

        .btn-pay:hover { background: #15803d; transform: translateY(-2px); }

        .input-field {
            width: 100%; 
            padding: 14px; 
            border: 1.5px solid #e2e8f0; 
            border-radius: 12px;
            font-family: inherit;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        
        .input-field:focus { border-color: #16a34a; outline: none; background: #f0fdf4; }

        @media (max-width: 850px) {
            .payment-wrapper { grid-template-columns: 1fr; }
            .order-summary-card { position: static; order: -1; }
        }
    </style>
</head>
<body>
    <?php include_once __DIR__ . '/../layouts/header.php'; ?>

    <div class="payment-container">
        <div class="back-nav">
            <a href="index.php?page=cart" class="btn-back-link">
                <span>←</span> Return to Cart
            </a>
        </div>

        <main class="payment-wrapper">
            <section class="payment-card">
                <div style="margin-bottom: 30px;">
                    <h2>Payment Method</h2>
                    <p style="color: #64748b; font-size: 15px;">Confirm your order and select how you'd like to pay.</p>
                </div>

                <form action="app/controllers/ProcessOrder.php" method="POST">
                    <label class="method-option">
                        <input type="radio" name="payment_method" value="gcash" checked>
                        <div class="method-details">
                            <b>GCash / E-Wallet</b>
                            <span>Instant payment via mobile wallet</span>
                        </div>
                    </label>

                    <label class="method-option">
                        <input type="radio" name="payment_method" value="meetup">
                        <div class="method-details">
                            <b>Cash on Meetup</b>
                            <span>Pay in person at CHMSU Campus</span>
                        </div>
                    </label>

                    <div style="margin-top: 40px; border-top: 1px solid #f1f5f9; padding-top: 30px;">
                        <h3 style="font-size: 18px; color: #064e3b; margin-bottom: 20px; font-weight: 700;">Verification Info</h3>
                        <input type="text" name="full_name" class="input-field" placeholder="Full Name" required>
                        <input type="text" name="student_id" class="input-field" placeholder="Student ID (e.g., 21-0123)" required>
                    </div>

                    <button type="submit" class="btn-pay">Place Your Order</button>
                </form>
            </section>

            <aside class="order-summary-card">
                <h3 class="summary-title">Order Summary</h3>
                
                <div class="summary-items-list">
                    <?php foreach ($_SESSION['cart'] as $item): ?>
                    <div class="summary-item">
                        <span><?php echo $item['qty']; ?>x <?php echo $item['name']; ?></span>
                        <span>₱<?php echo number_format($item['price'] * $item['qty']); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div style="margin-top: 25px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1);">
                    <div class="summary-item" style="opacity: 0.7;">
                        <span>Subtotal</span>
                        <span>₱<?php echo number_format($total); ?></span>
                    </div>
                    <div class="summary-item" style="opacity: 0.7;">
                        <span>Service Fee</span>
                        <span>₱0.00</span>
                    </div>
                    
                    <div class="total-row">
                        <span>Total Due</span>
                        <span>₱<?php echo number_format($total); ?></span>
                    </div>
                </div>

                <div style="margin-top: 30px; background: rgba(255,255,255,0.08); padding: 20px; border-radius: 16px; border: 1px solid rgba(255,255,255,0.1);">
                    <p style="font-size: 12px; margin: 0; line-height: 1.6; color: #d1fae5;">
                        <b>Campus Policy:</b> Meetups should take place in public campus areas like the Student Lounge. Ensure you inspect items before paying.
                    </p>
                </div>
            </aside>
        </main>
    </div>
</body>
</html>