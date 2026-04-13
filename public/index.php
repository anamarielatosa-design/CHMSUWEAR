<?php
// Report errors so we can see what's wrong
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Logic to check which page to show - Default set to 'splash'
$page = isset($_GET['page']) ? $_GET['page'] : 'splash';

// Only require files if they exist to prevent the Fatal Error
if (file_exists('../app/controllers/AuthController.php')) {
    require_once '../app/controllers/AuthController.php';
}
if (file_exists('../app/controllers/ProductController.php')) {
    require_once '../app/controllers/ProductController.php';
}

// Simple Router
switch ($page) {
    case 'splash':
        if (class_exists('AuthController')) {
            $auth = new AuthController();
            $auth->showSplash();
        } else {
            echo "AuthController.php is missing!";
        }
        break;

    case 'login':
        $auth = new AuthController();
        $auth->showLogin();
        break;
   
    case 'register':
        $auth = new AuthController();
        $auth->showRegister();
        break;
    case 'about':
        include '../app/views/screens/about.php';
        break;

    case 'home':
        if (class_exists('ProductController')) {
            $shop = new ProductController();
            $shop->index();
        } else {
            echo "ProductController.php is missing in app/controllers/";
        }
        break;

    case 'market':
        include '../app/views/screens/market.php';
        break;

    case 'cart':
        include '../app/views/screens/cart.php';
        break;

    case 'sell':
        include '../app/views/screens/sell.php';
        break;
    case 'payment':
        include '../app/views/screens/payment.php'; // Add this line
        break;

    case 'community':
        include '../app/views/screens/community.php';
        break;

    case 'settings':
        include '../app/views/screens/settings.php';
        break;
    case 'profile':
        include '../app/views/screens/profile.php';
        break;
    case 'order':
        include "../app/views/admin/admin-order.php";
        break;


    default:
        // Check if landing file exists
        if (file_exists('../app/views/screens/landing.php')) {
            include '../app/views/screens/landing.php';
        } else {
            // Fallback to splash if page is not found
            header("Location: index.php?page=splash");
            exit();
        }
        break;
}

