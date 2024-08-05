<?php
include 'functions/pdo_functions.php';

function Check_user($User_Name, $Pass_Word)
{
    $sql = "SELECT * FROM `tai_khoan` 
    INNER JOIN `khach_hang` 
    ON `tai_khoan`.`ID_KH` = `khach_hang`.`ID_KH` 
    AND `User_Name` = '$User_Name' 
    AND `Pass_Word` = '$Pass_Word'";
    return query_data($sql);
}

function Check_User_Register()
{
    $sql = "SELECT `User_Name`, `Email` 
    FROM `tai_khoan` 
    INNER JOIN `khach_hang` 
    ON `tai_khoan`.`ID_KH` = `khach_hang`.`ID_KH`;";
    return query_data($sql);
}

function Insert_Register_InfoUser($Name, $Email, $Phone_Number, $Address)
{
    $sql = "INSERT INTO `khach_hang`( `Name`, `Email`, `Phone_Number`, `Address`) 
    VALUES ('$Name','$Email','$Phone_Number','$Address')";
    return execute_sql($sql);
}

function Insert_Register_AccountUser($User_Name, $Pass_Word, $id)
{
    $sql = "INSERT INTO `tai_khoan`(`User_Name`, `Pass_Word`, `Role`, `ID_KH`, `Status`)
    VALUES ('$User_Name', $Pass_Word, '1', $id, '1')";
    return execute_sql($sql);
}

function Get_ID_last(){
    $sql = "SELECT ID_KH 
    FROM `khach_hang` 
    ORDER BY `ID_KH` 
    DESC LIMIT 1";
    return query_one_record($sql);
}

function Get_accout_User_for_Admin()
{
    $sql = "SELECT * FROM `tai_khoan` 
    INNER JOIN `khach_hang` 
    ON `tai_khoan`.`ID_KH` = `khach_hang`.`ID_KH` 
    AND `Role` = 1;";
    return query_data($sql);
}

function Get_accout_Staff_for_Admin()
{
    $sql = "SELECT * FROM `tai_khoan` 
    INNER JOIN `khach_hang` 
    ON `tai_khoan`.`ID_KH` = `khach_hang`.`ID_KH` 
    AND `Role` <> 1;";
    return query_data($sql);
}
?>