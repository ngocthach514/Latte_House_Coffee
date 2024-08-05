<?php
include_once 'functions/pdo_functions.php';
// PRODUCT
function Add_Product($Name, $Describes, $Name_DM, $Image_SP, $Price, $Sale_Percents)
{
    $sql = "INSERT INTO `san_pham`(`Name`, `Price`, `Describes`, `Sale_Percents`, `Image`, `ID_DM`) 
    VALUES ('$Name','$Price','$Describes','$Sale_Percents','$Image_SP','$Name_DM')";
    return execute_sql($sql);
}
function Add_Size_Product($Size, $Size_Percents, $id_last)
{
    $sql = "INSERT INTO `size`(`Name_Size`, `Percents`, `ID_SP`) 
    VALUES ('$Size', '$Size_Percents', '$id_last')";
    return execute_sql($sql);
}
function Get_ID_SP_last()
{
    $sql = "SELECT ID_SP 
    FROM `san_pham` 
    ORDER BY `ID_SP` 
    DESC LIMIT 1";
    return query_one_record($sql);
}
function check_name_sp($Name)
{
    $sql = "SELECT * 
    FROM `san_pham` 
    INNER JOIN `size` 
    ON `san_pham`.`ID_SP` = `size`.`ID_SP` 
    AND `san_pham`.`Name` = '$Name'";
    return query_data($sql);
}
function check_size_sp($Size, $Name)
{
    $sql = "SELECT * 
    FROM `san_pham` 
    INNER JOIN `size` 
    ON `san_pham`.`ID_SP` = `size`.`ID_SP`
    AND `san_pham`.`Name` = '$Name'
    AND `size`.`Name_Size` = '$Size'";
    return query_data($sql);
}
function delete_sp($id)
{
    $sql = "DELETE FROM `size` WHERE `ID_SP` = '$id';
    DELETE FROM `san_pham` WHERE `ID_SP` = '$id';";
    return execute_sql($sql);
}
// COMMENTS
function Get_All_Comments()
{
    $sql = "SELECT *, `khach_hang`.`Name` AS `Name_User`, 
    `san_pham`.`Name` AS `Name_SP` 
    FROM `binh_luan` 
    INNER JOIN `khach_hang`, `san_pham` 
    WHERE `binh_luan`.`ID_KH` = `khach_hang`.`ID_KH` 
    AND `binh_luan`.`ID_SP` = `san_pham`.`ID_SP` 
    ORDER BY `date_crt` ASC";
    return query_data($sql);
}

function hidden_comments($id)
{
    $sql = "UPDATE `binh_luan` SET `Role`= '2' WHERE `ID_BL` = '$id';";
    return execute_sql($sql);
}

function presently_comments($id)
{
    $sql = "UPDATE `binh_luan` SET `Role`= '1' WHERE `ID_BL` = '$id';";
    return execute_sql($sql);
}
// CATEGORIES
function Get_All_Category() {
    $sql = "SELECT * FROM `danh_muc`";
    return query_data($sql);
}

function hidden_categories($id)
{
    $sql = "UPDATE `danh_muc` SET `Role`= '2' WHERE `ID_DM` = '$id';";
    return execute_sql($sql);
}

function presently_categories($id)
{
    $sql = "UPDATE `danh_muc` SET `Role`= '1' WHERE `ID_DM` = '$id';";
    return execute_sql($sql);
}

function Del_categories($id) {
    $sql = "DELETE FROM `danh_muc` WHERE `ID_DM` = '$id'";
    return execute_sql($sql);
}

function Insert_Cate($Name_DM, $Decribes, $Image)
{
    $sql = "INSERT INTO `danh_muc`(`Name_DM`, `Decribes`, `Image`, `Role`) 
    VALUES ('$Name_DM','$Decribes','$Image','1')";
    return execute_sql($sql);
}

function Update_Cate($Name_DM, $Decribes, $Image, $id)
{
    $sql = "UPDATE `danh_muc` SET `Name_DM`='$Name_DM',`Decribes`='$Decribes',`Image`='$Image',`Role`='1' 
    WHERE `ID_DM` = '$id'";
    return execute_sql($sql);
}
function Get_One_Category($id) {
    $sql = "SELECT * FROM `danh_muc` WHERE `ID_DM` = '$id'";
    return query_one_record($sql);
}
function check_cate($Name)
{
    $sql = "SELECT * FROM `danh_muc` 
    WHERE `danh_muc`.`Name_DM` = '$Name'";
    return query_data($sql);
}
// BANNER
function Get_All_Banner() {
    $sql = "SELECT * FROM `banner`";
    return query_data($sql);
}

function hidden_banner($id)
{
    $sql = "UPDATE `banner` SET `Status`= 'Hidden' WHERE `ID_Banner` = '$id';";
    return execute_sql($sql);
}

function presently_banner($id)
{
    $sql = "UPDATE `banner` SET `Status`= 'Active' WHERE `ID_Banner` = '$id';";
    return execute_sql($sql);
}

function Del_banner($id) {
    $sql = "DELETE FROM `banner` WHERE `ID_Banner` = '$id'";
    return execute_sql($sql);
}
