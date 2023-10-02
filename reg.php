  <?php include('header.php'); ?>
  <html>
  <!-- $encrypass=password_hash($pass, PASSWORD_DEFAULT); -->

  <head>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- jQuery (necessary JavaScript plugins) -->
      <script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
      <script type="text/javascript" src="js/megamenu.js"></script>
      <script>
          $(document).ready(function() {
              $(".megamenu").megamenu();
          });
      </script>
      <script src="js/menu_jquery.js"></script>
      <script src="js/simpleCart.min.js"> </script>
      <script type="application/x-javascript">
          addEventListener("load", function() {
              setTimeout(hideURLbar, 0);
          }, false);

          function hideURLbar() {
              window.scrollTo(0, 1);
          }
      </script>
      <!-- Vendor CSS Files -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">



      <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <style>
          .card-registration .select-input.form-control[readonly]:not([disabled]) {
              font-size: 5rem;
              line-height: 2.15;
              padding-left: .75em;
              padding-right: .75em;
          }

          .card-registration .select-arrow {
              top: 100px;
          }

          #hrl {
              height: 900px;
              width: 750px;
          }
      </style>
      <script type="text/javascript" language="javascript">
          function validate() {
              //First Name Validation
              var fn = document.getElementById('fname').value;

              if (fn == "") {
                  document.getElementById('msg1').innerHTML = "Please Enter First Name";
                  return false;
              }
              // if (!/^[a-zA-Z]*$/g.test(document.fn1.value)) {
              //     // alert("Invalid characters");
              //     document.getElementById('msg1').innerHTML = "Please enter alfabetic value Only";
              //     return false;
              // } else {
              //     document.getElementById('msg1').innerHTML = "";
              // }


              //Last Name Validation

              var ln = document.getElementById('lname').value;

              if (ln == "") {
                  document.getElementById('msg2').innerHTML = "Please Enter last Name";
                  return false;
              }

              // if (!/^[a-zA-Z]*$/g.test(document.fn.fn2.value)) {
              //     //alert("Invalid characters");
              //     document.getElementById('msg2').innerHTML = "Please enter alfabetic value Only";
              //     return false;
              // } else {
              //     document.getElementById('msg2').innerHTML = "";
              // }


              // IMG Validation




              // var img = document.getElementById('img').value;
              // if (img == "") {
              // //alert("Please Enter Product Title");
              // document.getElementById('msg3').innerHTML = "Please choose img";
              // return false;
              // } else {
              // document.getElementById('msg3').innerHTML = "";
              // }

              //Email Validation

              var x = document.getElementById('email').value;

              var atpos = x.indexOf("@");

              var dotpos = x.lastIndexOf(".");

              if (x == "") {
                  /*alert("Not a valid e-mail address");*/
                  document.getElementById('msg12').innerHTML = "Plese enter Email ID";
                  return false;
              } else if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                  document.getElementById('msg12').innerHTML = "Not a valid e-mail address";
                  return false;
              } else {
                  document.getElementById('msg12').innerHTML = "";
              }










              //Password & Confirm Password
              if (document.fn.password.value == "") {
                  /*alert('Please input Password');
                  document.fn.txtPassword.focus();*/
                  document.getElementById('msg13').innerHTML = "Please input Password";
                  return false;
              } else {
                  document.getElementById('msg13').innerHTML = "";
              }
              if (document.fn.conpassword.value == "") {
                  /*alert('Please input Confirm Password');
                  document.fn.txtConPassword.focus(); */
                  document.getElementById('msg14').innerHTML = "Please input Confirm Password";
                  return false;
              } else {
                  document.getElementById('msg14').innerHTML = "";
              }
              if (document.fn.password.value != document.fn.conpassword.value) {
                  /*alert('Confirm Password Not Match');
                  document.fn.txtConPassword.focus(); */
                  document.getElementById('msg14').innerHTML = "Password is Not Match";
                  return false;
              }

              //Mobile Validation

              var mon = document.getElementById('contact')

              if (mon.value == "") {
                  /*alert("You didn't enter a phone number.");*/
                  document.getElementById('msg9').innerHTML = "You didn't enter a Mobile number.";
                  mon.value = "";
                  mon.focus();
                  return false;
              } else if (isNaN(mon.value)) {
                  /*alert("The phone number contains illegal characters.");*/
                  document.getElementById('msg9').innerHTML = "The Mobile number contains illegal characters.";
                  mon.value = "";
                  mon.focus();
                  return false;
              } else if (!(mon.value.length == 10)) {
                  /*alert("The phone number is the wrong length. \nPlease enter 10 digit mobile no.");*/
                  document.getElementById('msg9').innerHTML =
                      "You must have to enter 10 digits only";
                  mon.value = "";
                  mon.focus();
                  return false;
              } else {
                  document.getElementById('msg9').innerHTML = "";
              }

              //Address Validation

              var add = document.getElementById('address').value;

              if (add == "") {
                  document.getElementById('msg5').innerHTML = "Please Enter Address";
                  return false;
              } else {
                  document.getElementById('msg5').innerHTML = "";
              }
          }
      </script>
  </head>

  <body>





      <section class="bg-dark">
          <form method="post" enctype="multipart/form-data" name="fn">
              <div class="container">
                  <div class="row d-flex justify-content-center align-items-center ">
                      <div class="col">
                          <div class="card card-registration my-0">
                              <div class="row">
                                  <div class="col-xl-6 d-none d-xl-block">
                                      <div id=hrl class="img-fluid" style="background:url(assets/img/bg1.jpg)no-repeat;background-size: cover;border-top-left-radius: .20rem; border-bottom-left-radius: .20rem;">
                                      </div>
                                      <!-- <div class="img-fluid" style="background: url('\sup_store\S_Stores\assets\img\backg.jpg');
                                    background-size: cover ;"></div> -->
                                  </div>
                                  <div class="col-xl-6">
                                      <div class="card-body p-md-5 text-black">
                                          <!-- <center><h3 class="mb-5 text-uppercase">Registration form</h3></center> -->
                                          <h3 class="mb-5 text-uppercase fw-bold text-bg-dark p-3 text-center">
                                              Registration form</h3>
                                          <div class="row">
                                              <!-- <div class="col-md-6 mb-4">
                                                
                                                <label>
                                                    <input placeholder="first name" type="text" tabindex="1" id="fname" name="fn1">
                                                    <span id="msg1" style="color:red; font-weight:bold;"></span>
                                                </label>
                                            </div> -->
                                              <div class="col-md-6 mb-4">
                                                  <div class="form-outline">
                                                      <label class="form-label" for="fname" name="fn1">First
                                                          name</label><br>
                                                      <input type="text" id="fname" name="fname" tabindex="1" class="form-control form-control-lg" />
                                                      <span id="msg1" style="color:red; font-weight:bold;"></span>
                                                  </div>
                                              </div>
                                              <div class="col-md-6 mb-4">
                                                  <div class="form-outline">
                                                      <label class="form-label" for="lname" name="fn2">Last
                                                          name</label><br>
                                                      <input type="text" id="lname" tabindex="2" name="lname" class="form-control form-control-lg" />
                                                      <span id="msg2" style="color:red; font-weight:bold;"></span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-outline mb-4">
                                              <script>
                                                  var x = 1;

                                                  function validateImage(event) {
                                                      document.getElementById('result').innerHTML = '';
                                                      if (x == 2) {
                                                          document.getElementById('output').remove();
                                                          x = 1;
                                                      }
                                                      var profile_image = document.getElementById('profile_image');
                                                      var filename = profile_image.value;
                                                      if (filename != '') {
                                                          var extDoct = filename.lastIndexOf(".") + 1;
                                                          var ext = filename.substr(extDoct, filename.length).toLowerCase();
                                                          if (ext == "jpg" || ext == "JPG" || ext == "JPEG" || ext ==
                                                              "jpeg" || ext == "png" || ext == "PNG") {
                                                              if (x == 2) {
                                                                  document.getElementById('output').remove();
                                                                  x = 1;
                                                              }
                                                              x = 1;
                                                              var output = document.createElement('img');
                                                              output.id = 'output';
                                                              output.class = 'validation_img';
                                                              output.src = URL.createObjectURL(event.target.files[0]);
                                                              //profile_image.after(output);
                                                          } else {
                                                              document.getElementById('result').innerHTML =
                                                                  "<b>Please upload image file only</b>";
                                                          }
                                                      }
                                                  }
                                              </script>
                                              <!-- <input type="text" id="address" class="form-control form-control-lg" /> -->
                                              <label class="form-label" for="profile_image">Profile Image</label><br>
                                              <input type="file" name="profimg" class="form-control form-control-lg " size="80px" id="profile_image" onchange="validateImage(event)" name="profimg" tabindex="3">
                                              <div id="result1">
                                                  <span id="result" style="color:red; font-weight:bold;"></span>
                                              </div>

                                          </div>

                                          <div class="form-outline mb-4">
                                              <label class="form-label" for="email">Email ID</label><br>
                                              <input type="email" name="email" tabindex="4" id="email" class="form-control form-control-lg" />

                                              <span id="msg12" style="color:red; font-weight:bold;"></span>
                                          </div>
                                          <div class="form-outline mb-4">
                                              <label class="form-label" for="password">Password</label><br>
                                              <input type="password" name="password" tabindex="5" id="password" class="form-control form-control-lg" />

                                              <span id="msg13" style="color:red; font-weight:bold;"></span>
                                          </div>

                                          <div class="form-outline mb-4">
                                              <label class="form-label" for="conpassword">Confirm Password</label><br>
                                              <input type="password" name="conpassword" tabindex="6" id="conpassword" class="form-control form-control-lg" />

                                              <span id="msg14" style="color:red; font-weight:bold;"></span>
                                          </div>
                                          <div class="form-outline mb-4">
                                              <label class="form-label" for="contact" name="contact">Contact
                                                  No.</label><br>
                                              <input type="phone" id="contact" name="contact" tabindex="7" class="form-control form-control-lg" />
                                              <span id="msg9" style="color:red; font-weight:bold;"></span>
                                          </div>
                                          <div class="form-outline mb-4">
                                              <label class="form-label" for="address">Address</label><br>
                                              <input type="text" id="address" name="address" tabindex="8" class="form-control form-control-lg" />
                                              <span id="msg5" style="color:red; font-weight:bold;"></span>
                                          </div>
                                          <div class="d-flex justify-content-center pt-3">
                                              <!-- <button type="reset" class="btn btn-light btn-lg"><a class="btn btn-light btn-lg" href="/srushh/S_Stores(aesha)/reg.php">Reset all</a></button> -->
                                              <!-- <input type="submit" value="create an account" id="register-submit" onClick="return(validate());" name="register" tabindex="15" /> -->
                                              <center><button type="submit" name="submit" id="submit" class="btn btn-warning btn-lg ms-2" onClick="return(validate());" name="register" tabindex="9">Submit form</button></center>
                                          </div>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>


          <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script> -->
          <!-- Template Main JS File -->
          <script src="assets/js/main.js"></script>

          <?php
            include 'conn.php';

            if (isset($_POST['submit'])) {
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $profimg = strval($_FILES["profimg"]["name"]);
                $email = $_POST["email"];
                $password = $_POST["password"];
                $contact = $_POST["contact"];
                $address = $_POST["address"];
                $fname;
                $encrypass = password_hash($password, PASSWORD_DEFAULT);

                $target_dir = "/assets/img/users/";
                $target_file = $target_dir . basename(strval($_FILES['profimg']['name']));

                if (move_uploaded_file($_FILES["profimg"]["tmp_name"], $target_file)) {
                    echo "<center><i><h4>The file " . basename($_FILES["profimg"]["name"]) . " has been uploaded.</h4></i></center>";
                } else {

                    //echo "<center><script> alert ('upload image file only');</script></font></center>";
                }

                $query = "INSERT INTO user (`f_name`, `l_name`, `profile_img`, `email`, `password`, `mob_no`, `address`) 
                      VALUES ('$fname','$lname','$profimg','$email','$encrypass','$contact','$address');";
                $res = mysqli_query($conn, $query);

                if ($res) {

                    // header("location:/srushh/S_Stores(aesha)/log-in.php?sign-upsuccess=TRUE!");
                    echo "<script>window.location.href ='log-in.php';</script>";
                } else {
                }
            }
            include('footer.php');
            ?>
  </body>

  </html>