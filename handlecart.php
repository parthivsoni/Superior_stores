<?php
include 'conn.php';
// $cart_id = $_POST['cart_id'];
// $weight = $_POST['weight'];
// $qty = $_POST['qty'];
// $product_price = $_POST['product_price'];
// $total = 0;
// if ($weight == "250") {
//     $total = ($product_price * $qty) / 4;
// } else if ($weight == "500") {
//     $total =($product_price * $qty) / 2;
// } else if ($weight == "750") {
//     $total = ($product_price * $qty) * 3 / 4;
// } else if ($weight == "1000") {
//     $total = $product_price * $qty;
// }
// echo $total;

if(isset($_POST['change_weight']) && isset($_POST['change_weight_cart_id'])){
    // echo "<script> alert('Hiiiiiiiiiiii'); </script>";
    $chng_wei=$_POST['change_weight'];
    $chng_wei_cart_id=$_POST['change_weight_cart_id'];

    $update_qry="update cart set pro_weight=$chng_wei where cart_id=$chng_wei_cart_id;";
    if($update_qry_res=mysqli_query($conn,$update_qry)){
        // Done
    }
}
if(isset($_POST['incri_cart_id'])){
    $cart_id=$_POST['incri_cart_id'];
    $query = "Select * from cart where cart_id=$cart_id";
    if($res=mysqli_query($conn,$query)){
        if(mysqli_num_rows($res) > 0){
            $row=mysqli_fetch_assoc($res);
            $qty=$row['pro_qty']+1;   
            
            $update_qry="update cart set pro_qty=$qty where cart_id=$cart_id;";
            if($update_qry_res=mysqli_query($conn,$update_qry)){
                // Done
            }
        }    
    } 
    else{
    echo "<script>alert(".mysqli_error($conn).")</script>";

}
    
}

if(isset($_POST['decri_cart_id'])){
    $cart_id=$_POST['decri_cart_id'];
    $query = "Select * from cart where cart_id=$cart_id";
    if($res=mysqli_query($conn,$query)){
        if(mysqli_num_rows($res) > 0){
         $row=mysqli_fetch_assoc($res);
         $qty=$row['pro_qty']-1;   
         
         $update_qry="update cart set pro_qty=$qty where cart_id=$cart_id;";
         if($update_qry_res=mysqli_query($conn,$update_qry)){
            // Done
        }
        }
    }

}
?>