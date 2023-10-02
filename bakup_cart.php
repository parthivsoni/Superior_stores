<?php 
include 'userfunctions.php';
include 'header.php'; 

?>
<?php
if(isset($_POST['addtocart'])){
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
            echo "<script>alert('that number of qountity".$qty."')</script>";
        }
        else{
            $inquery = "Insert into cart (cart_id,user_id,pro_id,pro_qty) values (Null,$user_id,$Product_id,1)";
            if(mysqli_query($conn,$inquery)){
            echo "<script>alert('It is Done successfully');</script>";
            }
        }
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
        margin: 90px auto;

    }

    .crt-col-9 {
        margin: 80px auto;
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
        padding: 5px;
        color: #fff;
        background: #a52818;
        font-weight: normal;
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
    $(document).on('change', 'td .weight', function() {
        var cart_id = parseInt(document.getElementById($(this).closest('cart_id')).value);
        // var cart_id=parseInt($(this).closest('cart_id').value);
        var weight = parseInt(document.getElementById('weight').value);
        var qty = parseInt(document.getElementById(cart_id).value);
        var product_price = parseInt(document.getElementById('price' + cart_id).value);
        var total = 0;
        if (weight == "gm1") {
            total = parseFloat((product_price * qty) / 4);
        } else if (weight == "gm2") {
            total = parseFloat((product_price * qty) / 2);
        } else if (weight == "gm3") {
            total = parseFloat((product_price * qty) * 3 / 4);
        } else if (weight == "gm4") {
            total = product_price * qty;
        }
        alert(cart_id);
        document.getElementById('price' + cart_id).innerText = total + "/-";


    });
    </script>
    <script>
        $(document).on('change', 'td .weight', function() {
            var cart_id = parseInt(document.getElementById($(this).closest('cart_id')).value);
            var weight = parseInt(document.getElementById('weight').value);
            var qty = parseInt(document.getElementById(cart_id).value);
            var product_price = parseInt(document.getElementById('price' + cart_id).value);

         $.ajax({
      url: "handlecart.php",
      type: "POST",
      data: {
        cart_id: cart_id,
        weight: weight,
        qty: qty,
        product_price = product_price
      },
      cache: false,
      success: function (result) {
        $("#city").html("<option>"+Uname+"</option><option>"+state_id+"</option>");
      }
    });
});
  
    </script>
</head>

<body>
    <div class="crt">
        <table class="ct">
            <tr>
                <th>Product</th>
                <th>Weight</th>
                <th>Quantity</th>
                <th>Sub Total</th>
            </tr>
            <?php
            $user_id = $_SESSION['id'];
            
            if($cart_result=mysqli_query($conn,"Select * from cart where user_id=$user_id")){
                
                if(mysqli_num_rows($cart_result)>0){
                    while($cart_row=mysqli_fetch_assoc($cart_result)){
                        $Product_id_cart = $cart_row['pro_id'];
                        $select_cart = "Select * from product where pro_id=$Product_id_cart";
                        if($prod_res = mysqli_query($conn,$select_cart))
                        if(mysqli_num_rows($prod_res)>0){
                            $Product_row = mysqli_fetch_assoc($prod_res);
                            
                            
                            ?>

            <tr>
                <td>
                    <div class="crtinfo">
                        <img src="assets/img/<?=$Product_row['pro_img']?>" alt="<?=$Product_row['pro_name']?>"
                            style="widht:20%">
                        <p><?= $Product_row['pro_name']?></p>
                        <small><br> Price : <?=$Product_row['pro_price'] ?> Rs.</small>
                        <br>
                        <!-- <button class="btn" style="width:7.5%;height:43px;display:flex;"><i
                            class="bi bi-trash3"></i></button>
                    <a href="">Remove</a> -->
                    </div>
                </td>
                <td>
                    <input type="hidden" name="weight" id="cart_id" value="<?=$cart_row['cart_id']; ?>">
                    <input type="hidden" id="price<?=$cart_row['cart_id']; ?>" value="<?=$Product_row['pro_price']; ?>">
                    <select id="weight" class="weight">
                        <option value="Syc" disabled>Select Your Choice</option>
                        <option value="250">250gm</option>
                        <option value="500">500gm</option>
                        <option value="750">750gm</option>
                        <option value="1000">1 Kg</option>

                    </select>


                </td>
                <td>
                    <button onclick="decrement(<?php echo $cart_row['cart_id']; ?>)">-</button>
                    <input id="<?=$cart_row['cart_id'];?>" type="text" disabled
                        value="<?php echo $cart_row['pro_qty']?>">
                    <button onclick="increment(<?php echo $cart_row['cart_id']; ?>)">+</button>
                    <script>
                    function increment(cart_id) {
                        var incri = parseInt(document.getElementById(cart_id).value);
                        incri += 1;
                        document.getElementById(cart_id).value = incri;
                    }

                    function decrement(cart_id) {
                        var dicri = parseInt(document.getElementById(cart_id).value);
                        if (dicri < 2) {
                            exit;
                        } else {
                            dicri -= 1;
                            document.getElementById(cart_id).value = dicri;
                        }
                    }
                    </script>

                </td>
                <td>
                    <div class="price<?=$cart_row['cart_id'];?>">
                    
                        <?php if(isset($_POST['total'])){
                            echo $_POST['total'];
                        } 
                        else {
                            echo $Product_row['pro_price'];
                        }
                            ?>Rs.
                </td>
    </div>
    </td>

    </tr>
    <?php
}
       }
         }
       }
       ?>
    </div>
    </table>
    <!-- <button type="submit" name="buy" value="Proceed to Buy" a href=""></button> -->
</body>
<!-- <div class="crtinfo">
                    <img src="assets/img/almond.jpeg" alt="Almonds" style="widht:20%">
                    <p>Almonds<br></p>
                    <small><br> Price : 1100 Rs.</small>
                    <br><button class="btn" style="width:7.5%;height:43px;display:flex;"><i
                            class="bi bi-trash3"></i></button>
                    <a href="">Remove</a>
                </div> -->

</html>

<?php include 'footer.php'; ?>