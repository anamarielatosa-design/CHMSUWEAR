<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHMSUWEAR | Official Store</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <nav class="navbar">
        <h2 style="color:var(--primary)">CHMSU<span style="color:var(--accent)">WEAR</span></h2>
        <div>Home | Shop | Cart</div>
    </nav>

    <header class="hero">
        <h1>Excellence in Every Thread</h1>
        <p>Get your official University uniforms and merchandise here.</p>
    </header>

    <div class="product-grid">
        <?php foreach($products as $p): ?>
        <div class="card">
            <div style="height:200px; background:#eee; border-radius:15px;"></div> 
            <h3><?php echo $p['name']; ?></h3>
            <p style="color:var(--primary); font-weight:bold;">₱<?php echo number_format($p['price'], 2); ?></p>
            <button class="btn-buy">Add to Bag</button>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
 