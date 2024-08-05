<?php
// session_start();
ob_start();
if (isset($_GET['logout'])) {
    session_unset();
    header('index.php?mod=page&act=home');
};
include_once 'models/function_user.php';
include_once 'models/function_product.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'login':
            $category = Get_Category();
            $title = 'Login Page';
            if (isset($_POST['login']) && $_POST['login']) {
                $User_Name = $_POST['User_Name'];
                $Pass_Word = $_POST['Pass_Word'];
                $check = Check_user($User_Name, $Pass_Word);
                if (count($check) == 0) {
                    echo '<script>
                                alert("Tài Khoản hoặc Mật Khẩu không chính xác !!!");
                            </script>';
                } else {
                    $_SESSION['User'] = $check[0];
                    if ($_SESSION['User']['Status'] == 2) {
                        echo '<script>
                                alert("Tài khoản đã bị khóa");
                            </script>';
                        session_unset();
                        header('index.php?mod=user&act=login');
                    } else {
                        if ($_SESSION['User']['Role'] == 1) {
                            header("Location: index.php?mod=page&act=home");
                        }
                        if ($_SESSION['User']['Role'] == 2) {
                            header("Location: admin.php?mod=user&act=admin");
                        }
                        if ($_SESSION['User']['Role'] == 3) {
                            header("Location: admin.php?mod=product&act=manage");
                        }
                        if ($_SESSION['User']['Role'] == 4) {
                            header("Location: admin.php?mod=product&act=manage");
                        }
                        if ($_SESSION['User']['Role'] == 5) {
                            header("Location: admin.php?mod=product&act=manage");
                        }
                    }
                };
            }

            include_once 'views/user/template_user_head.php';
            include_once 'views/user/template_user_header.php';
            include_once 'views/user/page_login.php';
            include_once 'views/user/template_user_footer.php';
            break;
        case 'register':
            if (isset($_POST['Register'])) {
                // Tạo user
                $User_Name = $_POST['User_Name'];
                $Pass_Word = $_POST['Pass_Word'];
                $Re_Pass_Word = $_POST['Re_Pass_Word'];
                $Email = $_POST['Email'];
                $check = Check_User_Register();
                foreach ($check as $key) {
                    if ($key['User_Name'] == $User_Name || $key['Email'] == $Email) {
                        echo '<script>
                                    alert("Tài Khoản hoặc Email đã bị trùng, Vui lòng nhập 1 tài khoản khác hoặc 1 địa chỉ Email khác !!!");
                                </script>';
                    } else {
                        if ($Pass_Word == $Re_Pass_Word) {
                            $Name = $_POST['Name'];
                            $Phone_Number = $_POST['Phone_Number'];
                            $Address = $_POST['Address'];
                            Insert_Register_InfoUser($Name, $Email, $Phone_Number, $Address);
                            // tạo account
                            $ID_KH = Get_ID_last();
                            $id = $ID_KH['ID_KH'];
                            Insert_Register_AccountUser($User_Name, $Pass_Word, $id);
                            echo '<script>
                            alert("Đăng Ký Thành Công !!!");
                            </script>';
                            header('Location: index.php?mod=user&act=login');
                            break;
                        } else {
                            echo '<script>
                                    alert("Mật Khẩu Nhập Lại Chưa Chính Xác !!!");
                                </script>';
                            header('Location: index.php?mod=user&act=register');
                            break;
                        }
                    }
                }
            }
            $title = 'Register Page';
            include_once 'views/user/template_user_head.php';
            include_once 'views/user/template_user_header.php';
            include_once 'views/user/page_register.php';
            include_once 'views/user/template_user_footer.php';
        case 'admin':
            $title = 'Product Management';
            $account = Get_accout_Staff_for_Admin();
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/manage_acc_admin.php';
            include_once 'views/admin/template_admin_footer.php';
            break;
        case 'add_user':
            $title = 'Add User';
            $account = Get_accout_User_for_Admin();
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/manage_acc_admin.php';
            include_once 'views/admin/template_admin_footer.php';
            break;
        case 'acount_user':
            $title = 'ACOUNT MANAGER';
            $account = Get_accout_User_for_Admin();
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/manage_acc_user.php';
            include_once 'views/admin/template_admin_footer.php';
            break;
        default:
            # code...
            break;
    }
}
