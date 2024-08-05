<?php
include_once 'models/function_product.php';
include_once 'models/function_admin.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'manage':
            $title = 'Product Management';
            $all_banner = Get_All_Banner();
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/manage_banner.php';
            include_once 'views/admin/template_admin_footer.php';
            break;
        case 'add':
            $title = 'Add Categories Management';
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            // include_once 'views/admin/manage_banner.php';
            echo 'Sắp Code =)))))';
            include_once 'views/admin/template_admin_footer.php';
            break;
        case 'hidden':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                hidden_banner($id);
                header('Location: admin.php?mod=banner&act=manage');
            }
            break;
        case 'presently':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                presently_banner($id);
                header('Location: admin.php?mod=banner&act=manage');
            }
            break;
        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                Del_banner($id);
                header('Location: admin.php?mod=banner&act=manage');
            }
            break;
        default:
            # code...
            break;
    }
}
