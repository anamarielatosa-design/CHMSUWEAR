<?php
// Define the protocol key
define('ADMIN_PROTOCOL_KEY', 'CHMSUADMIN');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $role = $_POST['role'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($role === 'admin') {
        $admin_code = $_POST['admin_code'];
        if ($admin_code === ADMIN_PROTOCOL_KEY) {
            // SUCCESS: Redirect to Admin Dashboard
            header("Location: /CHMSUWEAR/app/views/admin/dashboard.php");
            exit();
        } else {
            // FAIL: Back to register with error
            echo "<script>alert('Invalid Admin Protocol!'); window.location.href='/CHMSUWEAR/public/index.php?page=register';</script>";
            exit();
        }
    } else {
        // SUCCESS: Redirect Student to Home
        header("Location: /CHMSUWEAR/public/index.php?page=home");
        exit();
    }
} else {
    header("Location: /CHMSUWEAR/public/index.php");
}