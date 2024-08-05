<?php
include_once 'models/function_product.php';
include_once 'models/function_admin.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'manage':
            $get_cate = Get_All_Category();
            $title = 'Product Management';
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/manage_categories.php';
            include_once 'views/admin/template_admin_footer.php';
            break;
        case 'add':
            $title = 'Add Categories Management';
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/catagories_add.php';
            include_once 'views/admin/template_admin_footer.php';
            if (isset($_POST['add_cate'])){
            $Name_DM = $_POST['Name_DM'];
            $check = check_cate($Name_DM);
            var_dump($check);
            if(count($check) == 0){
                    $Describes = $_POST['Describes'];
                    $Image = $_POST['Image'];
                    Insert_Cate($Name_DM, $Decribes, $Image);
                    echo '<script>alert("Thêm Danh Mục Thành Công");</script>'; 
                    header('Location: admin.php?mod=categories&act=manage');
                    break;
                }if(count($check) >= 1) {
                    echo '<script>alert("Danh Mục Đã Tồn Tại");</script>';
                    break;
                }
            }
            break;
        case 'edit':
            $title = 'Edit Categories Management';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            $cate = Get_One_Category($id);
            if(isset($_POST['update_dm'])) {
                $Name_DM = $_POST['Name_DM'];
                $Decribes = $_POST['Decribes'];
                $Image = $_POST['Image'];
                Update_Cate($Name_DM, $Decribes, $Image, $id);
                echo '<script>alert("Update Thành Công");</script>';
                header('Location: admin.php?mod=categories&act=manage');
                break;
            }
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/catagories_edit.php';
            include_once 'views/admin/template_admin_footer.php';
            break;
        case 'hidden':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                hidden_categories($id);
                header('Location: admin.php?mod=categories&act=manage');
            }
            break;
        case 'presently':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                presently_categories($id);
                header('Location: admin.php?mod=categories&act=manage');
            }
            break;
        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                Del_categories($id);
                header('Location: admin.php?mod=categories&act=manage');
            }
            break;
        default:
            # code...
            break;
    }
}
