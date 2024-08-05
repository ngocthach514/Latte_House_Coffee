<?php

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'orders_pending':
            $title = 'Product Management';
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/orders_pending.php';
            include_once 'views/admin/template_admin_footer.php';
            break;
        case 'orders_approved':
            $title = 'Product Management';
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/orders_approved.php';
            include_once 'views/admin/template_admin_footer.php';
            break;
        case 'orders_canceled':
            $title = 'Product Management';
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/orders_canceled.php';
            include_once 'views/admin/template_admin_footer.php';
            break;
        case 'add':
            $title = 'Add Categories Management';

            break;
        case 'edit':
            $title = 'Edit Categories Management';

            break;
        case 'delete':

            break;
        default:
            # code...
            break;
    }
}
?>