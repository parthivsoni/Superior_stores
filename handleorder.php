<?php
include 'conn.php';
if(isset($_POST['placeorder'])){
    $mast_user_id=$_POST['user_id'];
    $mast_total=$_POST['total_amt'];

    $user="select * from user where user_id=$mast_user_id";
    if($user_res=mysqli_query($conn,$user)){
        if(mysqli_num_rows($user_res) > 0 ){
            $user_row=mysqli_fetch_assoc($user_res);
            $u_address=$user_row['address'];

            $ord_mast_ins_qry="INSERT INTO `order_master` (`user_id`, `ord_status`, `ord_date`, `delivery_adr`, `total_amount`, `disc_per`, `disc_amt`, `payable_amt`) VALUES ('$mast_user_id', 'pending', CURRENT_TIMESTAMP(), '$u_address', '$mast_total', '0', '0', '$mast_total');";
            $flag=0;
            if($order_ins_res=mysqli_query($conn,$ord_mast_ins_qry)){
                $cart_fetch="select * from cart where user_id=$mast_user_id";
                if($cart_fetch_res=mysqli_query($conn,$cart_fetch)){
                    if(mysqli_num_rows($cart_fetch_res) > 0 ){
                        $select_mast_master_id="select * from order_master order by ord_id desc limit 1";
                        if($select_mast_master_id_res=mysqli_query($conn,$select_mast_master_id)){
                            $select_mast_master_id_row=mysqli_fetch_assoc($select_mast_master_id_res);
                            $order_id=$select_mast_master_id_row['ord_id'];


                        while($cart_row=mysqli_fetch_assoc($cart_fetch_res)){
                            $pro_id=$cart_row['pro_id'];
                            $pro_qty=$cart_row['pro_qty'];
                            $pro_wei=$cart_row['pro_weight'];

                            $pro_row=mysqli_fetch_assoc(mysqli_query($conn,"select * from product where pro_id= $pro_id"));
                            $pro_price=$pro_row['pro_price'];

                            $order_details="INSERT INTO `order_details` (`pro_id`, `ord_id`, `qty`, `pro_price`, `pro_weight`) VALUES ('$pro_id', '$order_id', '$pro_qty', '$pro_price', '$pro_wei');";
                            if($order_details_res=mysqli_query($conn,$order_details)){
                              // ADDED SUCCESSFULLY !
                            }
                            else{
                                $flag=1;
                                // ERROR MESSAGE 
                            }
                        }
                            //DELETE SECTION FOR CART !
                            $sel_qry="select * from cart where user_id=$mast_user_id";
                            if($sel_qry_res=mysqli_query($conn,$sel_qry)){
                                if(mysqli_num_rows($sel_qry_res) > 0 ){
                                    while($sel_qry_row=mysqli_fetch_assoc($sel_qry_res)){
                                        $cart_id=$sel_qry_row['cart_id'];
                                        $del_qry="delete from cart where cart_id=$cart_id";

                                        if($del_qry_res=mysqli_query($conn,$del_qry)){
                                            // NOTHING
                                        }
                                        else{
                                            $flag=1;   
                                        }
                                    }
                                }
                                else{
                                    $flag=1;
                                    // ERROR MESSAGE 
                                }

                            }
                            else{
                                $flag=1;
                                // ERROR MESSAGE 
                            }

                         
                    }
                    else{
                        $flag=1;
                        // ERROR MESSAGE 
                    }
                    
                    }
                    else{
                        $flag=1;
                        // ERROR MESSAGE 
                    }
                }
                else{
                    $flag=1;
                    // ERROR MESSAGE 
                }
            }
            else{
                $flag=1;
                // ERROR MESSAGE 
            }
            if($flag==0){
                header("Location: /S_Stores(main)/user_order.php?Place_Order=SUCCESS");
                exit();
            }
            else{
                header("Location: /S_Stores(main)/user_order.php?Place_Order=FAILURE");
                exit();
            }
    
        }
}
}
?>