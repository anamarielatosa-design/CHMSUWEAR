<?php
class ProductController {
    public function index() {
        // Mock data for the "Market" feed
        $items = [
            ['name' => 'CHMSU Varsity Jacket', 'price' => 1200, 'category' => 'Apparel', 'img' => 'varsity.jpg'],
            ['name' => 'Engineering Polo', 'price' => 450, 'category' => 'Uniform', 'img' => 'polo.jpg'],
            ['name' => 'Official Lanyard', 'price' => 150, 'category' => 'Accessories', 'img' => 'lanyard.jpg']
        ];

        include '../app/views/screens/home.php';
    }
}