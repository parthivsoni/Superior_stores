<?php
    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $pass= $_POST['password'];

        include 'conn.php';

        $qry = "select * from user where email = '$email'";
        $result = mysqli_query($conn, $qry);

        $numRows = mysqli_num_rows($result);
//        echo "<script> alert('helloo') </script>";
        // echo $numRows;
        if ($numRows==1) // if ij customer
        {
            //  echo 'hello';
                $row = mysqli_fetch_assoc($result);
            if (password_verify($pass,$row['password'])) // matlab login thai jiyu
            {

                // echo "oye hoye login thai jiyu";
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['Role'] = "Customer";
                $_SESSION['id'] = $row['user_id'];
                $user_id=$row['user_id'];
                $_SESSION['name'] = $row['f_name']." ".$row['l_name'];

                $cart_qry="select * from cart where user_id=$user_id";
                if($cart_qry_res=mysqli_query($conn,$cart_qry))
                {
                    if(mysqli_num_rows($cart_qry_res)>0)
                    {
                        $_SESSION['cart_arr']=[];    
                        while($cart_row=mysqli_fetch_assoc($cart_qry_res))
                        {
                            $product_id=$cart_row['pro_id'];
                            $product_qty=$cart_row['pro_id'];
                            $product_weight=$cart_row['pro_id'];
                        }
                    }
                    else
                    {
                    // no cart data for this user 
                    } 
                }
                header("Location:/S_Stores(main)/index.php?LoginSuccess=True");
                exit();
            }
            else    // nai thayu login
            {
                // echo "potaan id thi aay topa";
                header("Location:/S_Stores(main)/index.php?LoginSuccess=false&Fault=WrongPssword");
                exit();
            }
        }
        else // when no emil id is in cus tble as given, shyd stff ma hse
        {
            echo "<script>alert('You must have to sing-up')</script>";
        }
    }
?>