<?php

// Can be expanded with a router in the future
$uri = trim($_SERVER['REQUEST_URI'], '/');

if ($uri == '') {
    require '../app/controllers/HomeController.php';
    $controller = new HomeController();
    $controller->index();
} else {
    echo "404 Not Found"; // For now, a simple 404
}
