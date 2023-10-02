<?php
include('conn.php');
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $user_id = $_SESSION['id'];
    $get_user = "Select * from `user` where user_id = '$user_id'";
    // $get_pro = 'select * from user where user_id=$user_id';

    $run_pro = mysqli_query($conn, $get_user);

    $i = 0;

    while ($row_pro = mysqli_fetch_assoc($run_pro)) {
        $profile_img=$row_pro['profile_img'];
        $fname = $row_pro['f_name'];
        $lname = $row_pro['l_name'];
        $email = $row_pro['email'];
        $contact = $row_pro['mob_no'];
        $address = $row_pro['address'];
        $i++;
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        /* Style for the profile page container */
        .profile-container {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        /* Style for the profile image */
        .profile-image {
            display: block;
            margin: 0 auto;
            margin-top: 80px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Style for the profile name */
        .profile-name {
            text-align: center;
            font-size: 24px;
            /* margin-top: px; */
        }

        /* Style for the profile bio */
        .profile-bio {
            text-align: center;
            font-size: 16px;
            margin-top: 10px;
        }

        /* Apply the profile image as a background image to the container */
        .profile-container {
            background-image: url("asstes/img/");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center top;
        }

        .user-profile {
            max-width: 800px;
            max-height: 800px;
            ;
            margin: 10px auto;
            /* padding: 50px; */
            padding-left: 50px;
            padding-bottom: 50px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 0px 5px #ccc;
            margin-top: 10vh;
            /* Center the container element */
            position: relative;
            /* top: 50%;
			right: 50%; */
            /* transform: translate( -50%, -50%); */
            margin-bottom: 10vh;
            /* add a margin at the bottom */
        }

        .user-info {
            display: grid;
            padding-right: 100px;
            grid-template-columns: 1fr 2fr;
            grid-gap: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            resize: none;
        }

        input[type="text"]:disabled,
        input[type="email"]:disabled,
        input[type="tel"]:disabled,
        textarea:disabled {
            background-color: #f8f8f8;
        }

        .edit-btn {
            display: block;
            height: 8vh;
            width: 20vh;
            margin-top: 10px;
            border-radius: 10px;
            text-align: center;
            text-decoration: dashed;
            font-size: 20px;
            background-color: maroon;
        }

        .edit-btn:hover {
            text-decoration: none;
            /* background-color: maroon; */
        }
    </style>
</head>

<body>
    <form>
    <div class="user-profile">
        <div class="profile-header">
            <div class="profile-image">
                <img src="assets/img/users/user_logo.jpg" style="height: 20vh;width: 20vh;" alt="Profile Image">
            </div>
            <div class="profile-info">
                <center><h2><?php echo $fname."&nbsp". $lname;?></h2>
                </center>
                <br>
                <!-- <p>johndoe@example.com</p> -->
            </div>
        </div>
        <div class="user-info">
            <label for="fname">First Name :</label>
            <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" disabled>

            <label for="lname">Last Name :</label>
            <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>" disabled>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" disabled>

            <label for="phone">Phone :</label>
            <input type="tel" id="phone" name="phone" value="<?php echo $contact; ?>" disabled>

            <label for="address">Address :</label>
            <textarea class="form-control" type="text" disabled><?php echo $address; ?></textarea>

            <!-- <center><a href="#" class="edit-btn">Edit Profile</a><center> -->
        </div>
    </div>
    </form>
    <?php include('footer.php'); ?>

</body>

</html>