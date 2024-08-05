<?php

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'manage':
            $title = 'Product Management';
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/manage_feedback.php';
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