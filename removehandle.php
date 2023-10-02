<?php 
    include 'conn.php';
?>

<?php
if(isset($_POST['cart_id'])){
    $cart_id = $_POST['cart_id'];
    $rm_qry = "delete from cart where cart_id=$cart_id";
    if($rm_result=mysqli_query($conn,$rm_qry)){
        header('Location:/S_Stores(main)/cart.php');
        exit();
     }
}
?>