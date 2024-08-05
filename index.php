<?php
include_once 'config/config.php';
// Điều hướng controller
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}
if (isset($_GET['mod'])) {
    switch ($_GET['mod']) {
        case 'page':
            include_once 'controllers/page.php';
            break;
        case 'user':
            include_once 'controllers/user.php';
            break;
        case 'product':
            include_once 'controllers/product.php';
            break;
        case 'admin':
            include_once 'controllers/admin.php';
            break;
        default:
            # code
            break;
    }
} else {
    header('Location:index.php?mod=page&act=home');
}
?>