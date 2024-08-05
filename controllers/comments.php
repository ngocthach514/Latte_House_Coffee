<?php
include_once 'models/function_product.php';
include_once 'models/function_admin.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'manage':
            $title = 'Product Management';
            $get_all_comment = Get_All_Comments();
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/manage_comments.php';
            include_once 'views/admin/template_admin_footer.php';
            break;
        case 'add':
            $title = 'Add Categories Management';

            break;
        case 'hidden':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                hidden_comments($id);
                header('Location: admin.php?mod=comments&act=manage');
            }
            break;
        case 'presently':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                presently_comments($id);
                header('Location: admin.php?mod=comments&act=manage');
            }
            break;
        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                Del_comments($id);
                header('Location: admin.php?mod=comments&act=manage');
            }
            break;
        default:
            # code...
            break;
    }
}
