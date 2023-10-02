<?php
// session_start();
include 'conn.php';

function getAllActive($table)
{
    global $conn;
    $qurey = "SELECT * FROM $table";
    return $qurey_run = mysqli_query($conn,$qurey);
}

function getSlugActive($table , $subcat_id)
{
    global $conn;
    $qurey = "SELECT * FROM $table WHERE subcat_id='$subcat_id' LIMIT 1";
    return $qurey_run = mysqli_query($conn,$qurey);
}

function getProdBySubcat($subcat_id)
{
    global $conn;
    $qurey = "SELECT * FROM product WHERE subcat_id='$subcat_id' ";
    return $qurey_run = mysqli_query($conn,$qurey);
}

function getIDActive($table , $id)
{
    global $conn;
    $qurey = "SELECT * FROM $table WHERE id='$id' ";
    return $qurey_run = mysqli_query($conn,$qurey);
}

function redirect($url, $message)
{
    $_SESSION['message']=$message;
    header('Location: '.$url);
    exit(0);
}
?>