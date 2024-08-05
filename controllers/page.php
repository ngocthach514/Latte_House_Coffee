<?php
include_once 'models/function_product.php';
// Quản lý view liên quan đến trang chủ, giới thiệu...
// Call view (HTML,CSS,JS) model (SQL)
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            $title = 'Home';
            $products_best_deal = Get_Product_Best_Deal(5);
            $products_view = Get_Product_View(8);
            $products_sold = Get_Product_Quantity_Sold(4);
            $category = Get_Category();
            if (isset($_GET['iddm'])) {
                $iddm = $_GET['iddm'];
                $product_category = Get_Product_Category($iddm);
                include_once 'views/user/template_user_head.php';
                include_once 'views/user/template_user_header.php';
                include_once 'views/user/page_products.php';
                include_once 'views/user/template_user_footer.php';
            } else {
                include_once 'views/user/template_user_head.php';
                include_once 'views/user/template_user_header.php';
                include_once 'views/user/page_home.php';
                include_once 'views/user/template_user_footer.php';
            }
            break;
        case 'products':
            $title = 'All Products';
            include_once 'views/user/template_user_head.php';
            include_once 'views/user/template_user_header.php';
            include_once 'views/user/page_products.php';
            include_once 'views/user/template_user_footer.php';
            break;
        case 'cart':
            $title = 'Cart';
            $today = date("Y-m-d H:i:s");
            $voucher = Get_Voucher($today);
            $category = Get_Category();
            if (isset($_POST['thanhtoan'])) {
                // if(count($_SESSION['Cart']) > 0) {

                // }
                if (isset($_POST['add_voucher'])) {
                    $total = intval($_POST['total']) - intval($_POST['total'] * $_POST['Percent_Voucher'] / 100);
                } else {
                    $total = intval($_POST['total']);
                }
                // Transport Fee Random
                $randomPrice = mt_rand(10000, 150000);
                $roundedPrice = round($randomPrice, -4); // Làm tròn tới đơn vị chục nghìn
                $Image = $_POST['Image'];
                $Name = $_POST['Name'];
                $Size = $_POST['Size'];
                $Price_item = $_POST['Price_item'];
                $Quantity = $_POST['Quantity'];
                $Name_Company = $_POST['name_company'];
                $MST_Company = $_POST['MST_company'];
                $Address_Company = $_POST['address_company'];
                $Mail_Company = $_POST['mail_company'];
                // Ghi Chú Đơn Hàng
                if (isset($_POST['note_deal'])) {
                    $note_deal = $_POST['note_deal'];
                } else {
                    $note_deal = "";
                };
                var_dump(
                    $roundedPrice,
                    $Image,
                    $Name,
                    $Size,
                    $Price_item,
                    $Quantity,
                    $note_deal,
                    $total,
                    $Name_Company,
                    $MST_Company,
                    $Address_Company,
                    $Mail_Company
                );
            }
            include_once 'views/user/template_user_head.php';
            include_once 'views/user/template_user_header.php';
            include_once 'views/user/page_cart.php';
            include_once 'views/user/template_user_footer.php';
            break;
        case 'dashboard':
            $title = 'Dashboard';

            break;
        case 'Category':
            $title = 'Product To Categories';
            if (isset($_GET['iddm'])) {
                $iddm = $_GET['iddm'];
                $product_category = Get_Product_Category($iddm);
                $category = Get_Category();
                include_once 'views/user/template_user_head.php';
                include_once 'views/user/template_user_header.php';
                include_once 'views/user/page_products.php';
                include_once 'views/user/template_user_footer.php';
                break;
            }
            // else if (isset($_POST['search_product'])) {
            //     $key_name = $_POST['key_product'];
            //     $product_search_key_name = Search_Product_Name($key_name);
            //     include_once 'views/user/template_user_head.php';
            //     include_once 'views/user/template_user_header.php';
            //     include_once 'views/user/page_products.php';
            //     include_once 'views/user/template_user_footer.php';
            // } 
            else {
                include_once 'views/user/template_user_head.php';
                include_once 'views/user/template_user_header.php';
                include_once 'views/user/page_home.php';
                include_once 'views/user/template_user_footer.php';
            }
        default:
            # code...
            break;
    }
}
