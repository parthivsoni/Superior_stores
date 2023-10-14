<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <img src="" alt="">
    <style>
    * {
        margin: 1px;
        /* background: lightblue; */
        /* box-sizing: border-box; */
        justify-content: center;
        line-height: 1;
        padding: 5px;
    }
    .box{
    border:2px solid black;
}
    .container-form {
        /* margin:150px; */
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        /* height: 100hv; */
        /* width: 100px; */
        padding: 15px;
        font-size: 14px; 
         display: inline-block;
         border: 3px solid brown; 
    }

    .container-form table {
        border-collapse: separate;
         border-spacing: 15px;
        height: 20px;
        padding: 15px;
        margin: 10px;
    }

    input[type=button] {
        padding: 15px;
        margin: 10px;
        width: 10%;
        /* height: 30px; */
        background-color: slategrey;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: black;
    }

    .h1 {
        font-size: 28px;
        text-align: center;
        color: brown;
        /* border-bottom: 1px solid grey; */
    }

    .alert {
        text-align: center;
    }
   
    </style>
</head>

<body>
    <div class="h1">
        <h1>Edit Profile</h1>
    </div>
    <div class="box">
        <div class="container-form">
            <center>
                <form action="#">

                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <center>
                                <img class="rounded-circle mt-5" width="150px"
                                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            </center>
                            <span class="font-weight-bold">Superior</span><br><br>
                            <span class="text-black-50">superiorstores13@gmail.com</span>
                            <span> </span>
                        </div>
                    </div>

                    <table>
                        <tr>
                            <th> Name : </th>
                            <td> <input type="text" name="Name" placeholder="Enter your Name " required
                                    style="border:1px solid purple"> <br> </td>
                        </tr>
                        <tr>
                            <th> User Name :</th>
                            <td> <input type="text" name="User_Name" placeholder="Enter user name " required
                                    style="border:1px solid purple"><br> </td>
                        </tr>
                        <tr>
                            <th> Email : </th>
                            <td> <input type="text" name="Email" placeholder="Enter your email " required
                                    style="border:1px solid purple"><br></td>
                        </tr>
                        <tr>
                            <th> Password : </th>
                            <td><input type="password" name="password" placeholder="Enter password " required
                                    style="border:1px solid purple"><br></td>
                        </tr>
                        <tr>
                            <th> Phone No. : </th>
                            <td><input type="text" name="Phone_number" placeholder="Enter your Number " required
                                    style="border:1px solid purple"> <br> </td>
                        </tr>
                    </table>
                </form>
            </center>


        </div>
    </div>

    <center>
        <div class="icon">
            <input type="button" value="Edit Your details" name="Edit your details" style="border: solid blue">
            <input type="button" value="Confirm" name="Confirm" style="border:4px solid blue">
        </div>
    </center>

    <div class="alert">
        <p>
            By clicking Edit Your profile, you agree to our<a href="#">Terms , Privacy policy and cookies Policy.</a>You
            may receive SMS notification from us and can opt out at any time.
        </p>
    </div>







</body>

</html>