<?php
include_once 'models/function_product.php';
include_once 'models/function_admin.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'detail':
            $category = Get_Category();
            $title = 'Detail';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            $product_detail = Get_Product_Detail($id);
            $size = Get_size_product($id);
            $products_sold = Get_Product_Quantity_Sold(4);
            $comments = Get_comments($id);
            // Comment
            if (isset($_POST['up_comment'])) {
                if (isset($_SESSION['User'])) {
                    if (empty($_POST['contents'])) {
                        echo '<script>alert("Vui Lòng Nhập Form đầy đủ trước khi Comment!!!")</script>';
                    } else {
                        $id_kh = $_SESSION['User']['ID_KH'];
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $date = date("Y-m-d H:i:s");
                        $contents = $_POST['contents'];
                        Up_comments($contents, $id_kh, $id, $date);
                        header('Location: index.php?mod=product&act=detail&id=' . $id . '');
                    }
                } else {
                    header('Location: index.php?mod=user&act=login');
                };
            }
            // Xóa Comments
            if (isset($_POST['Del_cmt'])) {
                $id_cmt = $_POST['id_bl'];
                Del_comments($id_cmt);
                header('Location: index.php?mod=product&act=detail&id=' . $id . '');
            };
            // Sửa Comments
            if (isset($_POST['update_cmt'])) {
                $id_cmt = $_POST['id_bl'];
                $contents = $_POST['contents_cmt'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $date = date("Y-m-d H:i:s");
                Update_comments($id_cmt, $contents, $date);
                header('Location: index.php?mod=product&act=detail&id=' . $id . '');
            };
            // Add Card
            if (isset($_POST['add_cart'])) {
                $Name = $_POST['Name'];
                $Image = $_POST['Image'];
                $Price = $_POST['Price'];
                $Quantity = $_POST['Quantity'];
                // Size
                if (isset($_POST['Size'])) {
                    $Price_Size = $_POST['price_size'];
                    $Size = $_POST['Size'];
                } else {
                    $Price_Size = 0;
                    $Size = 'S';
                }
                // Đường
                if (isset($_POST['sugar'])) {
                    if ($_POST['sugar'] == 1) {
                        $Sugar = 50;
                    }
                    if ($_POST['sugar'] == 2) {
                        $Sugar = 70;
                    }
                    if ($_POST['sugar'] == 3) {
                        $Sugar = 100;
                    }
                } else {
                    $Sugar = 50;
                }
                // Đá
                if (isset($_POST['ice'])) {
                    if ($_POST['ice'] == 1) {
                        $Ice = 50;
                    }
                    if ($_POST['ice'] == 2) {
                        $Ice = 70;
                    }
                    if ($_POST['ice'] == 3) {
                        $Ice = 100;
                    }
                } else {
                    $Ice = 50;
                }
                // Trân Châu
                if (isset($_POST['tran_chau_trang'])) {
                    $tran_chau_trang = $_POST['tran_chau_trang'];
                    $price_tran_chau_trang = $_POST['price_tran_chau_trang'];
                } else {
                    $tran_chau_trang = "";
                    $price_tran_chau_trang = "";
                }
                if (isset($_POST['tran_chau_soi'])) {
                    $tran_chau_soi = $_POST['tran_chau_soi'];
                    $price_tran_chau_soi = $_POST['price_tran_chau_soi'];
                } else {
                    $tran_chau_soi = "";
                    $price_tran_chau_soi = "";
                }
                // Tạo SESSION CART
                if (!$_SESSION['Cart']) {
                    $_SESSION['Cart'] = [];
                }
                if ((count($_SESSION['Cart']) > 0)) {
                    $i = 0;
                    $check = false;
                    foreach ($_SESSION['Cart'] as $key) {
                        if ($key['Size'] == $Size && $key['ID_SP'] == $id) {
                            $_SESSION['Cart'][$i]['Quantity'] = $key['Quantity'] + $Quantity;
                            $check = true;
                            break;
                        }
                        $i++;
                    }
                    if (!$check) {
                        $Cart = [
                            'Name' => $Name,
                            'Size' => $Size,
                            'Quantity' => $Quantity,
                            'Price' => $Price,
                            'Image' => $Image,
                            'ID_SP' => $id,
                            'Ice' => $Ice,
                            'Sugar' => $Sugar,
                            'TCT' => $tran_chau_trang,
                            'Price_TCT' => $price_tran_chau_trang,
                            'TCS' => $tran_chau_soi,
                            'Price_TCS' => $price_tran_chau_soi,
                            'Price_Size' => $Price_Size
                        ];
                        $_SESSION['Cart'][] = $Cart;
                    }
                } else {
                    $Cart = [
                        'Name' => $Name,
                        'Size' => $Size,
                        'Quantity' => $Quantity,
                        'Price' => $Price,
                        'Image' => $Image,
                        'ID_SP' => $id,
                        'Ice' => $Ice,
                        'Sugar' => $Sugar,
                        'TCT' => $tran_chau_trang,
                        'Price_TCT' => $price_tran_chau_trang,
                        'TCS' => $tran_chau_soi,
                        'Price_TCS' => $price_tran_chau_soi,
                        'Price_Size' => $Price_Size
                    ];
                    $_SESSION['Cart'][] = $Cart;
                };
                header('Location: index.php?mod=page&act=cart');
            };
            include_once 'views/user/template_user_head.php';
            include_once 'views/user/template_user_header.php';
            include_once 'views/user/product_detail.php';
            include_once 'views/user/template_user_footer.php';
            break;
        case 'search':
            $title = 'Product Search';
            include_once 'views/admin/template_user_head.php';
            include_once 'views/admin/template_user_header.php';
            include_once 'views/admin/page_products.php';
            include_once 'views/admin/template_user_footer.php';
            break;
        case 'manage':
            $sp = Get_Product_All();
            $title = 'Product Management';
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/manage_products.php';
            include_once 'views/admin/template_admin_footer.php';
            break;
        case 'add':
            $dm = Get_Category();
            $title = 'Add Product Management';
            if (isset($_POST['add_product'])) {
                $Name = $_POST['Name_SP'];
                $Describes = $_POST['Describes'];
                $Name_DM = $_POST['Name_DM'];
                if ($_POST['Size'] == 'M') {
                    $Size_Percents = $_POST['SizeM_Percents'];
                    $Size = $_POST['Size'];
                }
                if ($_POST['Size'] == 'L') {
                    $Size = $_POST['Size'];
                    $Size_Percents = $_POST['SizeL_Percents'];
                }
                if ($_POST['Size'] == 'XL') {
                    $Size = $_POST['Size'];
                    $Size_Percents = $_POST['SizeXL_Percents'];
                }
                $Image_SP = $_POST['Image_SP'];
                $Price_Sale = $_POST['Price_Sale'];
                $Price = $_POST['Price'];
                $Sale_Percents = (($Price - $Price_Sale) / $Price) * 100;
                $check_name_sp = check_name_sp($Name);
                $check_size_sp = check_size_sp($Size, $Name);
                if (count($check_name_sp) == 0) {
                    // Thêm sản phẩm nếu check list name chưa có sản phẩm
                    $id_last = Get_ID_SP_last();
                    $id = $id_last['ID_SP'];
                    Add_Product($Name, $Describes, $Name_DM, $Image_SP, $Price, $Sale_Percents);
                    Add_Size_Product($Size, $Size_Percents, $id);
                    echo '<script>alert("Sản Phẩm đã được thêm");</script>';
                    header('Location: admin.php?mod=product&act=manage');
                    break;
                } else if (count($check_name_sp) > 0) {
                    if (count($check_size_sp) == 0) {
                        $id_last = Get_ID_SP_last();
                        $id = $id_last['ID_SP'];
                        Add_Size_Product($Size, $Size_Percents, $id);
                        echo '<script>alert("Sản Phẩm đã được thêm");</script>';
                        header('Location: admin.php?mod=product&act=manage');
                        break;
                    } else {
                        echo '<script>alert("Sản phẩm đã tồn tại hoặc Size' . $Size . '");</script>';
                        header('Location: admin.php?mod=product&act=add');
                        break;
                    }
                } else {
                    echo '<script>alert("Sản phẩm "' . $Name . '" đã tồn tại hoặc Sản Phẩm có "Size' . $Size . '" đã tồn tại");</script>';
                    header('Location: admin.php?mod=product&act=add');
                    break;
                }
            }
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/product_add.php';
            include_once 'views/admin/template_admin_footer.php';
            break;
        case 'edit':
            $title = 'Edit Product Management';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            };
            $dm = Get_Category();
            $get_sp = Get_Product_Detail($id);
            $get_size_sp = Get_size_product($id);
            if (isset($_POST['update_sp'])) {
                $Name = $_POST['Name_SP'];
                $Describes = $_POST['Describes'];
                if($_POST['Category'] == null) {
                    $Category = $_POST['cate_origin'];
                }else {
                    $Category = $_POST['Category'];
                }
                $check = false;
                // if ($_POST['Percents'] == 'S') {
                //     $Name_Size = 'S';
                //     $Percents = 0;
                //     $check = true;
                //     $Size = [
                //         'Name_Size' => $Name_Size,
                //         'Percents' => $Percents
                //     ];
                //     $Sizes['Size'][] = $Size;
                // } else {
                //     $Name_Size = $_POST['Size'];
                //     $Percents = $_POST['S'];
                //     $Size = [
                //         'Name_Size' => $Name_Size,
                //         'Percents' => $Percents
                //     ];
                //     $Sizes['Size'][] = $Size;
                // }
                if(isset($POST_['Percents'])){
                    if ($_POST['Percents'] == 'M') {
                        $Name_Size = 'M';
                        $Percents = $_POST['M'];
                        $check = true;
                        $Size = [
                            'Name_Size' => $Name_Size,
                            'Percents' => $Percents
                        ];
                        $Sizes['Size'][] = $Size;
                    } else {
                        $Name_Size = $_POST['Size'];
                        $Percents = $_POST['M'];
                        $Size = [
                            'Name_Size' => $Name_Size,
                            'Percents' => $Percents
                        ];
                        $Sizes['Size'][] = $Size;
                    }
                    if ($_POST['Percents'] == 'L') {
                        $Name_Size = 'L';
                        $Percents = $_POST['L'];
                        $Size = [
                            'Name_Size' => $Name_Size,
                            'Percents' => $Percents
                        ];
                        $Sizes['Size'][] = $Size;
                    } else {
                        $Name_Size = $_POST['Size'];
                        $Percents = $_POST['L'];
                        $Size = [
                            'Name_Size' => $Name_Size,
                            'Percents' => $Percents
                        ];
                        $Sizes['Size'][] = $Size;
                    }
                    if ($_POST['Percents'] == 'XL') {
                        $Name_Size = 'XL';
                        $Percents = $_POST['XL'];
                        $Size = [
                            'Name_Size' => $Name_Size,
                            'Percents' => $Percents
                        ];
                        $Sizes['Size'][] = $Size;
                    } else {
                        $Name_Size = $_POST['Size'];
                        $Percents = $_POST['XL'];
                        $Size = [
                            'Name_Size' => $Name_Size,
                            'Percents' => $Percents
                        ];
                        $Sizes['Size'][] = $Size;
                    }
                }
            }
            var_dump($Name, $Describes, $Category, $Sizes['Size']);
            include_once 'views/admin/template_admin_head.php';
            include_once 'views/admin/template_admin_header.php';
            include_once 'views/admin/product_edit.php';
            include_once 'views/admin/template_admin_footer.php';
            break;
        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_sp($id);
                header('Location: admin.php?mod=product&act=manage');
            }
            break;
        default:
            # code...
            break;
    }
}
