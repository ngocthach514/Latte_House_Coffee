<?php
session_start();
//dieu huong den cac controller
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
        case 'categories':
            include_once 'controllers/categories.php';
            break;
        case 'comments':
            include_once 'controllers/comments.php';
            break;
        case 'feedback':
            include_once 'controllers/feedback.php';
            break;
        case 'orders':
            include_once 'controllers/orders.php';
            break;
        case 'banner':
            include_once 'controllers/banner.php';
            break;
        default:

            break;
    }
} else {
    header("Location: admin.php?mod=page&act=dashboard");
}
?>