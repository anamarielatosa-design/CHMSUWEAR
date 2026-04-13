<?php

class AuthController {

    // 1. Splash Page Logic
    public function showSplash() {
        include '../app/views/auth/splash.php';
    }

    // 2. Login Page Logic
    public function showLogin() {
        include '../app/views/auth/login.php';
    }

    // 3. Register Page Logic
    public function showRegister() {
        include '../app/views/auth/register.php';
    }

    // You can add your actual login/register POST logic below this
}