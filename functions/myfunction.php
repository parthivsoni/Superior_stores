<?php

session_start();
include 'conn.php';

function getAll($table)
{
    global $con;
    $qurey = "SELECT * FROM $table";
    return $qurey_run = mysqli_query($con,$qurey);
}
function getByID($table , $id)
{
    global $con;
    $qurey = "SELECT * FROM $table WHERE id='$id' ";
    return $qurey_run = mysqli_query($con,$qurey);
}
function getAllActive($table)
{
    global $con;
    $qurey = "SELECT * FROM $table WHERE status='0' ";
    return $qurey_run = mysqli_query($con,$qurey);
}

function redirect($url, $message)
{
    $_SESSION['message']=$message;
    header('Location: '.$url);
    exit(0);
}
?>