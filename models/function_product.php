<?php
include_once 'functions/pdo_functions.php';

function Get_Product_Best_Deal($quantity_pro) {
    $sql = "SELECT *, `san_pham`.`Image` AS `Image_SP` FROM `san_pham` 
    INNER JOIN `danh_muc` 
    WHERE `san_pham`.`ID_DM` = `danh_muc`.`ID_DM` 
    ORDER BY `Sale_Percents` 
    DESC LIMIT $quantity_pro";
    return query_data($sql);
}

function Get_Product_View($quantity_pro) {
    $sql = "SELECT *, `san_pham`.`Image` AS `Image_SP` FROM `san_pham` 
    INNER JOIN `danh_muc` 
    WHERE `san_pham`.`ID_DM` = `danh_muc`.`ID_DM` 
    ORDER BY `Views` 
    DESC LIMIT $quantity_pro";
    return query_data($sql);
}

function Get_Product_Quantity_Sold($quantity_pro) {
    $sql = "SELECT *, `san_pham`.`Image` AS `Image_SP` FROM `san_pham` 
    INNER JOIN `danh_muc` 
    WHERE `san_pham`.`ID_DM` = `danh_muc`.`ID_DM` 
    ORDER BY `Quantity_Sold` 
    DESC LIMIT $quantity_pro";
    return query_data($sql);
}

function Get_Product_Detail($id) {
    $sql = "SELECT *, `san_pham`.`Image` AS `Image_SP` FROM `san_pham` 
    INNER JOIN `danh_muc` 
    WHERE `san_pham`.`ID_DM` = `danh_muc`.`ID_DM`
    AND `ID_SP` = $id";
    return query_one_record($sql);
}

function Get_size_product($id)
{
    $sql = "SELECT * FROM `size` 
    INNER JOIN `san_pham`
    WHERE `size`.`ID_SP` = `san_pham`.`ID_SP` 
    AND `san_pham`.`ID_SP` = $id";
    return query_data($sql);
}

function Get_comments($id) {
    $sql = "SELECT *, `khach_hang`.`Name` AS `Name_User` 
    FROM `binh_luan` 
    INNER JOIN `khach_hang`, `san_pham` 
    WHERE `binh_luan`.`ID_KH` = `khach_hang`.`ID_KH` 
    AND `binh_luan`.`ID_SP` = `san_pham`.`ID_SP` 
    AND `binh_luan`.`ID_SP` = $id 
    AND `Role` = 1
    ORDER BY `date_crt` ASC;";
    return query_data($sql);
}

function Up_comments($contents, $id_kh, $id, $date) {
    $sql = "INSERT INTO `binh_luan`(`Contents`, `ID_KH`, `ID_SP`, `Role`, `Date_Crt`) 
    VALUES ('$contents','$id_kh','$id','1','$date')";
    return execute_sql($sql);
}

function Del_comments($id_cmt) {
    $sql = "DELETE FROM `binh_luan` WHERE `ID_BL` = '$id_cmt'";
    return execute_sql($sql);
}

function Update_comments($id_cmt, $contents, $date) {
    $sql = "UPDATE `binh_luan` 
    SET `Contents` = '$contents', `Date_Crt` = '$date'
    WHERE `ID_BL` = '$id_cmt'";
    return execute_sql($sql);
}

function Get_Category() {
    $sql = "SELECT * FROM `danh_muc` 
    WHERE `Role` = 1";
    return query_data($sql);
}

function Get_Product_Category($iddm) {
    $sql = "SELECT *, `san_pham`.`Image` AS `Image_SP` FROM `danh_muc` 
    INNER JOIN `san_pham` 
    WHERE `danh_muc`.`ID_DM` = `san_pham`.`ID_DM` 
    AND `danh_muc`.`ID_DM` = $iddm;";
    return query_data($sql);
}

function Search_Product_Name($key_name) {
    $sql = "SELECT * FROM `san_pham` WHERE `Name` LIKE '%$key_name%'";
    return query_data($sql);
}

function Get_Voucher($today) {
    $sql = "SELECT * FROM `voucher` WHERE `Date_End` >= '$today' ORDER BY `Date_End` ASC";
    return query_data($sql);
}

function Get_Product_All() {
    $sql = "SELECT *, `san_pham`.`Image` 
    AS `Image_SP` FROM `san_pham` 
    INNER JOIN `danh_muc` 
    WHERE `san_pham`.`ID_DM` = `danh_muc`.`ID_DM` 
    ORDER BY `danh_muc`.`ID_DM` ASC";
    return query_data($sql);
}

?>
