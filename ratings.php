<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form in HTML Example </title>

  <meta name="author" content="Codeconvey" />

  <link rel="stylesheet" href="css/style.css">
  <!--Only for demo purpose - no need to add.-->
  <link rel="stylesheet" href="css/demo.css" />
  <style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900');



    html {
      box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }

    article,
    header,
    section,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    nav,
    summary {
      display: block;
    }

    body {
      background: #d9e5ed none repeat scroll 0 0;
      color: #222;
      font-size: 100%;
      line-height: 24px;
      margin: 0;
      padding: 0;
      font-family: "Raleway", sans-serif;
    }

    a {
      font-family: "Raleway", sans-serif;
      text-decoration: none;
      outline: none;
    }

    a:hover,
    a:focus {
      color: #373e18;
    }

    section {
      float: left;
      width: 100%;
      padding-bottom: 3em;
    }

    h2 {
      color: #1a0e0e;
      font-size: 26px;
      font-weight: 700;
      margin: 0;
      line-height: normal;
      text-transform: uppercase;
    }

    h2 span {
      display: block;
      padding: 0;
      font-size: 18px;
      opacity: 0.7;
      margin-top: 5px;
      text-transform: uppercase;
    }

    #float-right {
      float: right;
    }

    /* ******************************************************
	Script Top
*********************************************************/

    .ScriptTop {
      background: #fff none repeat scroll 0 0;
      float: left;
      font-size: 0.69em;
      font-weight: 600;
      line-height: 2.2;
      padding: 12px 0;
      text-transform: uppercase;
      width: 100%;
    }

    /* To Navigation Style 1*/
    .ScriptTop ul {
      margin: 24px 0;
      padding: 0;
      text-align: left;
    }

    .ScriptTop li {
      list-style: none;
      display: inline-block;
    }

    .ScriptTop li a {
      background: #6a4aed none repeat scroll 0 0;
      color: #fff;
      display: inline-block;
      font-size: 14px;
      font-weight: 600;
      padding: 5px 18px;
      text-decoration: none;
      text-transform: capitalize;
    }

    .ScriptTop li a:hover {
      background: #000;
      color: #fff;
    }


    /* ******************************************************
	Script Header
*********************************************************/

    .ScriptHeader {
      float: left;
      width: 100%;
      padding: 2em 0;
    }

    .rt-heading {
      margin: 0 auto;
      text-align: center;
    }

    .Scriptcontent {
      line-height: 28px;
    }

    .ScriptHeader h1 {
      font-family: "brandon-grotesque", "Brandon Grotesque", "Source Sans Pro", "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased;
      color: #6a4aed;
      font-size: 26px;
      font-weight: 700;
      margin: 0;
      line-height: normal;

    }

    .ScriptHeader h2 {
      color: #312c8f;
      font-size: 20px;
      font-weight: 400;
      margin: 5px 0 0;
      line-height: normal;

    }

    .ScriptHeader h1 span {
      display: block;
      padding: 0;
      font-size: 22px;
      opacity: 0.7;
      margin-top: 5px;

    }

    .ScriptHeader span {
      display: block;
      padding: 0;
      font-size: 22px;
      opacity: 0.7;
      margin-top: 5px;
    }




    /* ******************************************************
	Live Demo
*********************************************************/





    /* ******************************************************
	Responsive Grids
*********************************************************/

    .rt-container {
      margin: 0 auto;
      padding-left: 12px;
      padding-right: 12px;

    }

    .rt-row:before,
    .rt-row:after {
      display: table;
      line-height: 0;
      content: "";
    }

    .rt-row:after {
      clear: both;
    }

    [class^="col-rt-"] {
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -o-box-sizing: border-box;
      -ms-box-sizing: border-box;
      padding: 0 15px;
      min-height: 1px;
      position: relative;
    }


    @media (min-width: 768px) {
      .rt-container {
        width: 750px;
      }

      [class^="col-rt-"] {
        float: left;
        width: 49.9999999999%;
      }

      .col-rt-6,
      .col-rt-12 {
        width: 100%;
      }

    }

    @media (min-width: 1200px) {
      .rt-container {
        width: 1700px;
        /* height: 600px; */
      }

      .col-rt-1 {
        width: 16.6%;
      }

      .col-rt-2 {
        width: 30.33%;
      }

      .col-rt-3 {
        width: 50%;
      }

      .col-rt-4 {
        width: 67.664%;
      }

      .col-rt-5 {
        width: 83.33%;
      }


    }

    @media only screen and (min-width:240px) and (max-width: 768px) {

      .ScriptTop h1,
      .ScriptTop ul {
        text-align: center;
      }

      .ScriptTop h1 {
        margin-top: 0;
        margin-bottom: 15px;
      }

      .ScriptTop ul {
        margin-top: 20px;
      }

      .ScriptHeader h1,
      .ScriptHeader h2,
      .scriptnav ul {
        text-align: center;
      }

      .scriptnav ul {
        margin-top: 12px;
      }

      #float-right {
        float: none;
      }

    }

    input[type=email] {

      width: 500px;
      height: 30px;
    }

    .feedback {
      width: 100%;
      max-width: 800px;
      max-height: 800px;
      background: #fff;
      margin: 30px auto;
      padding: 30px;
      box-shadow: 1px 1px 16px rgba(0, 0, 0, 0.3);
    }

    .survey-hr {
      margin: 10px 0;
      border: .5px solid #ddd;
    }

    .star-rating {
      /* margin: 25px 0 0px; */
      font-size: 0;
      white-space: nowrap;
      display: inline-block;
      width: 173px;
      height: 35px;
      overflow: hidden;
      position: relative;
      background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
      background-size: contain;
    }

    .star-rating i {
      opacity: 0;
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 20%;
      z-index: 1;
      background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
      background-size: contain;
    }

    .star-rating input {
      /* -moz-appearance: none;
      -webkit-appearance: none; */
      opacity: 0;
      display: inline-block;
      width: 20%;
      height: 100%;
      margin: 0;
      padding: 0;
      z-index: 2;
      position: relative;
    }

    .star-rating input:hover+i,
    .star-rating input:checked+i {
      opacity: 1;
    }

    .star-rating i~i {
      width: 40%;
    }

    .star-rating i~i~i {
      width: 60%;
    }

    .star-rating i~i~i~i {
      width: 80%;
    }

    .star-rating i~i~i~i~i {
      width: 100%;
    }

    .choice {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      text-align: center;
      padding: 20px;
      display: block;
    }

    span.scale-rating {
      margin: 5px 0 15px;
      display: inline-block;

      width: 100%;

    }

    span.scale-rating>label {
      position: relative;
      /* -webkit-appearance: none; */
      outline: 0 !important;
      border: 1px solid grey;
      height: 33px;
      margin: 0 5px 0 0;
      width: calc(10% - 7px);
      float: left;
      cursor: pointer;
    }

    span.scale-rating label {
      position: relative;
      /* -webkit-appearance: none; */
      outline: 0 !important;
      height: 33px;

      margin: 0 5px 0 0;
      width: calc(10% - 7px);
      float: left;
      cursor: pointer;
    }

    span.scale-rating input[type=radio] {
      position: absolute;
      /* -webkit-appearance: none; */
      opacity: 0;
      outline: 0 !important;
      /*border-right: 1px solid grey;*/
      height: 33px;
      margin: 0 5px 0 0;
      width: 100%;
      float: left;
      /* cursor: pointer; */
      z-index: 3;
    }

    span.scale-rating label:hover {
      background: #fddf8d;
    }

    span.scale-rating input[type=radio]:last-child {
      border-right: 0;
    }

    span.scale-rating label input[type=radio]:checked~label {
      /* -webkit-appearance: none; */

      margin: 0;
      background: #fddf8d;
    }

    span.scale-rating label:before {
      content: attr(value);
      top: 5px;
      width: 100%;
      position: absolute;
      left: 0;
      right: 0;
      text-align: center;
      vertical-align: middle;
      z-index: 2;
    }
  </style>
</head>

<body>

  <!-- <div class="ScriptTop">
    <div class="rt-container">
      <div class="col-rt-4" id="float-right">

        Ad Here

      </div>
      <div class="col-rt-2">
        <ul>
          <li><a href="https://codeconvey.com/feedback-form-in-html" title="Back to tutorial page">Back to Tutorial</a></li>
        </ul>
      </div>
    </div>
  </div> -->

  <!-- <header class="ScriptHeader">
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="rt-heading">
          <h1>Feedback Form </h1>
          <!-- <p>A feedback form in HTML and CSS with star rating.</p> -->
  </div>
  </div>
  </div>
  </header> -->

  <section>
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="Scriptcontent">
          <div class="rt-heading">
            <h1 class="text-light"><b> Give Your Feedback</b></h1>
            <!-- <p>A feedback form in HTML and CSS with star rating.</p> -->
          </div>
          <form method="post">
            <div class="feedback">
              <h5><b>Dear Customer,</b></h5><p>
                Thank you for purchasing from our website. We would like to know how we performed. Please spare some moments to give us your valuable feedback as it will help us in improving our service.</p>

              <h3>Please share your experience and give us feedback.</h3><br>
              <form method="post" action="#action-url">
                <label><b>1. Please Enter Your E-mail</b></label><br>
                <input type="email" id="email" name="user_email" placeholder="Enter Your Email" style="width:70%; height:34px; border-radius: 5px;" required><br><br>
                <hr class="survey-hr">
                <label><b>2. Your overall experience with us?</b></label><br>
                <span class="star-rating">
                  <input type="radio" name="rating" value="1"><i>&nbsp;</i>
                  <input type="radio" name="rating" value="2"><i>&nbsp;</i>
                  <input type="radio" name="rating" value="3"><i>&nbsp;</i>
                  <input type="radio" name="rating" value="4"><i>&nbsp;</i>
                  <input type="radio" name="rating" value="5"><i>&nbsp;</i>
                </span>
                <div class="clear"></div>
                <hr class="survey-hr ">
                <label for="m_3189847521540640526commentText"><b> Any Other suggestions:</b></label><br>
                <textarea cols="60" style="border-radius: 5px;" name="fdesc" id="fdesc" rows="5"></textarea><br>
                <br>
                <div class="clear"></div>
                <input class="btn btn-curve btn-warning " style="padding:12px; font-weight: 600;" name="fsubmit" id="fsubmit" type="submit" value="Submit your review">&nbsp;
              </form>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Analytics -->
</body>

</html>
<?php include 'footer.php'; ?>
<?php
include 'conn.php';

if (isset($_POST['fsubmit'])) {
  // if ($_SERVER['REQUEST_METHOD'] == 'POST')
  //  {
  $email = $_POST["user_email"];
  $rating = $_POST["rating"];
  $fdesc = $_POST["fdesc"];
  // echo $email;



  $sql = "INSERT INTO `feedback` (`user_email`, `rating`, `f_desc`)
   VALUES ('$email', '$rating', '$fdesc');";
  $res = mysqli_query($conn, $sql);

  if ($res) {
    echo "<script> alert ('Thank you for being our valued customer. We are so grateful and hope we met your expectations.')</script>";
    // header("location:/srushh/S_Stores(aesha)/index.php?Feedbacksuccess=TRUE!");
    // header("location:/srushh/S_Stores(aesha)/log-in.php?sign-upsuccess=TRUE!");
    // echo "<script>window.location.href='index.php';</script>";
  } 
  else {
    echo "Not Submitted!";
  }
}
?>