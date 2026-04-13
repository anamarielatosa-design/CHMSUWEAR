<?php 
    $current_page = isset($_GET['page']) ? $_GET['page'] : 'home'; 
?>
<header class="main-header">
    <div class="header-container">
        <a href="index.php?page=home" class="header-logo" style="text-decoration: none;">
            <div class="brand-icon-circle-sm">CW</div>
            <div class="brand-text-sm">
                <h3>CHMSU Wear</h3>
                <p>Your campus. Your style.</p>
            </div>
        </a>

        <nav class="nav-menu">
            <a href="index.php?page=home" class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>">Home</a>
            <a href="index.php?page=market" class="<?php echo ($current_page == 'market') ? 'active' : ''; ?>">Market</a>
            <a href="index.php?page=sell" class="<?php echo ($current_page == 'sell') ? 'active' : ''; ?>">Sell</a>
            <a href="index.php?page=community" class="<?php echo ($current_page == 'community') ? 'active' : ''; ?>">Community</a>
            <a href="index.php?page=settings" class="<?php echo ($current_page == 'settings') ? 'active' : ''; ?>">Settings</a>
        </nav>

        <div class="header-actions">
            <a href="index.php?page=profile" style="text-decoration: none;">
                <div class="user-profile <?php echo ($current_page == 'profile') ? 'active' : ''; ?>">
                    <div class="user-info">
                        <span class="user-name">Juan</span>
                        <span class="user-role">Student</span>
                    </div>
                    <div class="avatar-circle">JD</div>
                </div>
            </a>
        </div>
    </div>
</header>