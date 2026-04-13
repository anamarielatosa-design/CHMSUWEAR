<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['product_name'])) {
    $name = $_POST['product_name'];
    $price = (int)$_POST['product_price'];

    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['name'] === $name) {
            $item['qty']++;
            $found = true;
            break;
        }
    }

    if (!$found) {
        $_SESSION['cart'][] = [
            'name' => $name, 
            'price' => $price, 
            'qty' => 1
        ];
    }

    // Return the total number of unique items in the cart
    echo count($_SESSION['cart']);
}
?>