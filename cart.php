<?php 
include 'userfunctions.php';
include 'header.php'; 

?>

<?php
if(isset($_POST['addtocart'])){
    // $id1=$_SESSION['cartn']??1;
    // echo "<script>alert('prod has been added to cart')</script>";
    $Product_id=$_POST['pro_id'];
    $user_id = $_SESSION['id'];
    $query = "Select * from cart where user_id=$user_id and pro_id=$Product_id";
    if($selectresult=mysqli_query($conn,$query)){
        if(mysqli_num_rows($selectresult)>0){
            $row = mysqli_fetch_assoc($selectresult);
            $cart_id = $row['cart_id'];
            $qty = $row['pro_qty']+1;
            $update_query = "UPDATE `cart` SET `pro_qty` = '$qty' WHERE `cart`.`cart_id` =$cart_id  AND `cart`.`pro_id` =$Product_id"; 
            if(mysqli_query($conn,$update_query)){
                // header("Location:S_Stores(main)/cart.php");
            }
            // echo "<script>alert('that number of qountity".$qty."')</script>";
        }
        else{
            // if($id1==1){
            $inquery = "Insert into cart (cart_id,user_id,pro_id,pro_qty,pro_weight) values (Null,$user_id,$Product_id,1,1000);";
            if(mysqli_query($conn,$inquery)){
            // echo "<script>alert('It is Done successfully');</script>";
            }
        // }
        // else{
            // $_SESSION['cartn']=1;
            // $inquery = "Insert into cart (cart_id,user_id,pro_id,pro_qty,pro_weight) values (Null,$user_id,$Product_id,1,1000);";
            // if(mysqli_query($conn,$inquery)){
            // echo "<script>alert('It is Done successfully');</script>";
            // }
        }
        // }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">

    <!-- Template Main CSS File -->
    <title>Cart and Product </title>
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- <link rel="import" href="cart.js"> -->
            <style>
            /* cart page css */
            /* cart page */
            .crt {
                margin-top: 11.5vh;
                padding-left: 30px;
                padding-right: 30px;
            }

            .crt-col-9 {
                margin: 100px auto;
                padding: 20px;
            }

            /* table class */
            .ct {
                width: 100%;
                border-collapse: collapse;
            }

            .crtinfo {
                display: flex;
                flex-wrap: wrap;
            }

            .cartinfo p {
                display: none;
            }

            .quantity {
                display: flex;
            }

            th {
                text-align: left;
                padding: 10px;
                color: #fff;
                background: #a52818;
                font-weight:normal;
                font-size:larger;
            }

            td {
                padding: 10px 5px;
            }


            td input {
                width: 40px;
                height: 30px;
                padding: 5px;
            }

            td a {
                color: #a52818;
                font-size: 12px;
            }


            td img {
                width: 80px;
                height: 80px;
                margin-right: 10px;
            }

            .totalprice {
                display: flex;
                justify-content: flex-end;
            }

            .totalprice table {
                border-top: 3px solid #a52818;
                width: 100%;
                max-width: 400px;
            }

            td :last-child {
                text-align: right;
            }

            th :last-child {
                text-align: right;
            }
            </style>



<script>
        var cartarr = [];
        var qtyarr = [];
        var weightarr = [];

        function caltotal(weight_id, cart_id, qty_id, pro_price, total_id) {
            var weight = $("#" + weight_id + " option:selected").val();

            var qty = $("#" + qty_id).val();
            var total = 0;

            if (weight == "250") {
                    total = (pro_price * qty / 4);
                } else if (weight == "500") {
                    total = (pro_price * qty / 2);
                } else if (weight == "750") {
                    total = (pro_price * qty * 3 / 4);
                } else if (weight == "1000") {
                    total = pro_price * qty;
            }
                         // alert(total);
             $("#" + total_id).html("₹"+total);
        }
    </script>
</head>

<body>
    <div class="crt">
        <?php
        $user_id = $_SESSION['id'];
        $isempty=1;
        if($cart_result=mysqli_query($conn,"Select * from cart where user_id=$user_id")){
            if(mysqli_num_rows($cart_result)>0){
                $isempty=0;
        ?>
        <table class="ct">
            <tr>
                <th>Product</th>
                <th>Weight</th>
                <th>Quantity</th>
                <th>Sub Total</th>
                <th>Remove</th>
            </tr>
            <?php
            
            
            // if($cart_result=mysqli_query($conn,"Select * from cart where user_id=$user_id")){
            //     if(mysqli_num_rows($cart_result)>0){
                    while($cart_row=mysqli_fetch_assoc($cart_result)){
                        $cart_id=$cart_row['cart_id'];
                        $Product_id_cart = $cart_row['pro_id'];
                        $select_cart = "Select * from product where pro_id=$Product_id_cart";
                        if($prod_res = mysqli_query($conn,$select_cart))
                        if(mysqli_num_rows($prod_res)>0){
                            $Product_row = mysqli_fetch_assoc($prod_res);

                            ?>
            <!-- before while  create an array in js called array_check and inside while append cart_id to this array-->

        
            <tr id="<?php echo $cart_row['cart_id'];?>">
                <td>
                    <div class="crtinfo">
                            <img src="assets/img/<?=$Product_row['pro_img']?>" alt="<?=$Product_row['pro_name']?>" style="width:20%;height:20%;">
                            
                        <p>
                            <br>
                            <b style="font-size:larger; "><?= $Product_row['pro_name']?></b><br>
                            <big>Price: ₹<?=$Product_row['pro_price'] ?>/Kg
                            </p>
                        <br>
                        <!-- <button class="btn" style="width:7.5%;height:43px;display:flex;"><i
                                class="bi bi-trash3"></i></button>
                                <a href="">Remove</a> -->
                    </div>
                </td>
                <td>
                <script>
                    $(document).on('change','#weight<?=$cart_row['cart_id']; ?>',function(){
        
                        var weight=this.value;                
                        $.ajax({
                        url: "handlecart.php",
                        type: "POST",
                        data: {
                        change_weight: weight,
                        change_weight_cart_id: <?=$cart_row['cart_id']; ?>
                    },
                        cache: false,           
                        success: function(result) {
                         
                    }
                   
                    });
                
                    });
                </script>
                    <input type="hidden" class="price" name="pro_price" value="<?=$Product_row['pro_price']; ?>">
                    <select id="weight<?=$cart_row['cart_id']; ?>" name="weight[]" class="weight"
                        onchange="caltotal('<?php echo 'weight'.$cart_row['cart_id']; ?>','<?php echo $cart_row['cart_id'];?>','<?php echo 'q'.$cart_id; ?>','<?php echo $Product_row['pro_price']; ?>','<?php echo 'price'.$cart_row['cart_id'];?>')">
                        <option value="250" <?php if($cart_row['pro_weight']==250){echo "selected";}?>>250gm</option>
                        <option value="500" <?php if($cart_row['pro_weight']==500){echo "selected";}?>>500gm</option>
                        <option value="750" <?php if($cart_row['pro_weight']==750){echo "selected";}?>>750gm</option>
                        <option class="text-start" value="1000" <?php if($cart_row['pro_weight']==1000){echo "selected";}?>>1 Kg</option>
                    </select>
                    <input type="hidden" class="cart" name="cart_id" value="<?=$cart_row['cart_id']; ?>">
                </td>
                <td>
                <script>
                    $(document).on('click','#incri_<?=$cart_row["cart_id"]; ?>',function(){
                       
                                    
                        $.ajax({
                        url: "handlecart.php",
                        type: "POST",
                        data: {
                        incri_cart_id: <?=$cart_row['cart_id']; ?>
                    },
                        cache: false,           
                        success: function(result) {
                            
                    }
                   
                    });
                
                    });
                    $(document).on('click',"#decri_<?php echo $cart_row['cart_id']; ?>",function(){
                         
                                    
                        $.ajax({
                        url: "handlecart.php",
                        type: "POST",
                        data: {
                        decri_cart_id: <?=$cart_row['cart_id']; ?>
                    },
                        cache: false,           
                        success: function(result) {
                            
                    }
                    });
                
                    });
                </script>
                    <script>
                        function increment(cart_id) {
                            // alert ('thai gayu');
                            var incri = parseInt($("#" + cart_id + " #q" + cart_id).val());
                            incri += 1;
                            console.log(incri);
                            $("#" + cart_id + " #q" + cart_id).val(incri);
                            caltotal('<?php echo 'weight'.$cart_row['cart_id']; ?>',
                                '<?php echo $cart_row['cart_id'];?>', '<?php echo 'q'.$cart_id; ?>',
                                '<?php echo $Product_row['pro_price']; ?>',
                                '<?php echo 'price'.$cart_row['cart_id'];?>');
                        }

                        function decrement(cart_id) {
                            // alert('maainus');
                            var dicri = parseInt($("#" + cart_id + " #q" + cart_id).val());
                            if (dicri < 2) {
                                exit;
                            } else {
                                dicri -= 1;
                                $("#" + cart_id + " #q" + cart_id).val(dicri);
                                // var weight_id = 'weight'
                                caltotal("<?php echo 'weight'.$cart_row['cart_id']; ?>",
                                    "<?php echo $cart_row['cart_id'];?>", "<?php echo 'q'.$cart_id; ?>",
                                    "<?php echo $Product_row['pro_price']; ?>",
                                    "<?php echo 'price'.$cart_row['cart_id'];?>");
                            }
                        }
                    </script>

                    <button type="button" id="decri_<?php echo $cart_row['cart_id']; ?>"
                        onclick="decrement(<?php echo $cart_row['cart_id']; ?>)">-</button>

                    <input class="qty" id="q<?php echo $cart_id; ?>" name="pro_qty" type="text"
                        value="<?php echo $cart_row['pro_qty'];?>">
                    
                    <button type="button" id="incri_<?php echo $cart_row['cart_id']; ?>"
                        onclick="increment(<?php echo $cart_row['cart_id']; ?>)">+</button>

                </td>
                <td>
                    <div class="text-start" id="price<?=$cart_row['cart_id'];?>">
                        ₹
                        <?php 
                        
                                if(isset($_POST['submit']) && $cart_id==$_POST['cart_id']){
                                    $cid = $_POST['cart_id'];
                                    $wei = $_POST['weight'];
                                    $qti = $_POST['pro_qty'];
                                    $pro_price = $_POST['pro_price'];
                                    
                                    $tot = 0;
                                    if ($wei == "250") {
                                        $tot = ($pro_price * $qti / 4);
                                    } else if ($wei == "500") {
                                    $tot = ($pro_price * $qti / 2);
                                    } else if ($wei == "750") {
                                        $tot = ($pro_price * $qti * 3 / 4);
                                    } else if ($wei == "1000") {
                                        $tot = $pro_price * $qti;
                                    }
                                    echo $tot;
                                } 
                                else {                  
                                    echo $Product_row['pro_price'];
                                }
                        ?>
                    
                </td>
        </div>
    </td>

    <td> <p>
        <form action="removehandle.php" method="POST">

            <!-- <script>
        function removeitem(cart_id) {
            // alert ('hii');
            // $('table #' + cart_id).remove();
            window.open("removehandle.php?cart_id=<?php echo $cart_row['cart_id'];?>");
        }
        </script> -->
            <input type="hidden" name="cart_id" value="<?php echo $cart_row['cart_id'];?>">
            <button type="submit" name="remove_btn " id="remove_<?php echo $cart_row['cart_id']; ?>"
                class="bi bi-trash rounded"></button>

            

        </form>
        </p>

    </td>
    </tr>
    <?php
                        // }
                    // }
}
}
?>


    </div>
    <!-- <script>
    $(document).on('click', '#demoid', function() {
        alert('hello');
        window.open("product.php?pro_id=<?//php// echo $Product_id;?>");
    });
    </script>

    <button type="submit" class="btn btn-dark text-light" formaction="product.php?pro_id=<?php //echo $Product_id;?>" id="demoid">back to shopping</button> -->


    </table>
<?php } 
    else{
        
        ?>
    <center>
            <h2>Sorry Your Cart is Empty</h2>
                <br><h2>For shopping click on the below button..!</h2>
                <div class="card-footer border-secondary bg-transparent">
                    <!-- <button type="submit" class="btn btn-lg btn-block btn-warning font-weight-bolder my-3 py-3" name="Shopnow">Shop Now</button> -->
                    <a class="btn btn-lg btn-block btn-warning font-weight-bolder my-3 py-2"style="width:20vh;" href="category.php">Shop Now</a>
                </div>
            </center>
<?php }
}
?>




<!-- <script>



           //SUPERIOR
                    $(document).on('click','#checkout',function(){
                        alert('=// $user_id ;?>');    
                        // var weight=this.value;                
                        var cartarr = [];
                        var qtyarr = [];
                        var weightarr = [];
                        $(".qty").each(function() {
                        qtyarr.push($(this).val());
                        
                    });
                    console.log(qtyarr);
                    $(".weight").each(function() {
                        weightarr.push($(this).val());
                        
                    });
                    console.log(cartarr);
                    $(".qty").each(function() {
                        cartarr.push($(this).val());
                        
                    });
                    console.log(cartarr);
                    });
            </script> -->
<?php if($isempty==0) { ?>
            <form action="checkout.php" class="container-fluid d-flex flex-row-reverse" id=checkout method="post">
                <button type="submit" class="btn btn-dark text-light-bolder btn-lg  my-3"style="width:20vh;" id="checkout" name="checkout">Checkout</button>
                    </form>         
            <?php }?>
</div>

<script>
    $(document).on('change', '#demoid', function() {
        window.open('checkout.php?cart=' + cartarr, '_self');

    });
    </script>


    <?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['weight'])){
        // foreach($_POST['weight'] as $w){
        //     echo $w;
        // }
          //  echo $_POST['weight'];
    }
    }
    ?><hr>
    <?php
                                $query = mysqli_query($conn, "select *from cart where user_id='{$user_id}'") or die(mysqli_error($conn));

                                $count = mysqli_num_rows($query);

                                if ($count > 0) {

                                ?>
 <?php include 'footer.php'; ?>
    <!-- <button type="submit" name="buy" value="Proceed to Buy" a href=""></button> -->
</body>

</html>

<?php } ?>

