<?php
session_start();
require 'db.php';
require('register-inc.php');
?>

<!DOCTYPE php>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>The Journal</title>
    <link rel="stylesheet" href="res/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="res/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="res/bootstrap/icons" />
    <link rel="stylesheet" href="res/fontawesome/css/all.css" />
    <link rel="stylesheet" href="res/css/style.css" />
    <link rel="stylesheet" href="res/css/bottom.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
  </head>
  <body>


    <!-- navbar -->
      <div class="dii">
        <div class="container mt-2">
          <nav class="navbar navbar-expand-lg navbar-light nav-bg sticky">
    	      <a class="navbar-brand ml-sm-3" href="#">
    	         <div class="container py-1">
                  <img src="images/mado.jpg"  style="width:300px;" alt="">
                </div>
    	      </a>
            <!-- <button class="navbar-toggler" style="border:none;" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left:-135px;">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                  <a class="nav-link ml-sm-3 text-dark font-weight-bold " style="font-size:20px;font-family:ibarrarealnova-variablefont;" href="index.php">Home</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link ml-sm-3 text-dark font-weight-bold" style="font-size:20px;font-family:ibarrarealnova-variablefont;" href="about.php">About</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link ml-sm-3 text-dark font-weight-bold" style="font-size:20px;font-family:ibarrarealnova-variablefont;" href="post.php">Posts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ml-sm-3 text-dark font-weight-bold" style="font-size:20px;font-family:ibarrarealnova-variablefont;" href="contact.php">Contact</a>
                </li>
              </ul>
              <div class="">
                <a href="signup.php"><button type="button" class="btn btn-color " style="font-family:ibarrarealnova-variablefont;">Sign Up</button></a>
                <a href="login.php"><button type="button" class="btn btn-color1"style="font-family:ibarrarealnova-variablefont;">Login</button></a>
              </div>
            </div>
       		</nav>
        </div>
		  <!--navbar---->
    </div>
     <?php require_once("register-inc.php"); ?>
     <?php require_once("register-inc.php"); ?>
     <?php if (isset($_SESSION['error']) &&  $_SESSION['error'] == 1) { ?>
          <div class="container position-relative mt-5">
               <div class="alert alert-danger d-flex align-items-center position-absolute top-0 end-0 mt-5" id="alertActivation" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                         <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                         <?php echo $_SESSION['errorMassage']; ?>
                         <?php $_SESSION['error'] = 0   ?>
                    </div>
               </div>
          </div>
     <?php } ?>



    <!-- login mobile view -->
      <div class="container mt-5  ">
        <div class="row mt-5">
          <div class="col-sm-12 ">
            <h1 class="text-center" style="font-family:ibarrarealnova-variablefont;font-weight:bold;color:#034191;">Hello ??????? !!</h1>
            <p class="text-center" style="font-family:ibarrarealnova-variablefont;font-weight:bold;color:#034191;">Would be nice to have an account with us!!</p>
          </div>
          <form class="row g-3 d-block d-sm-none gig" name="submitRegister" action="register-inc.php" method="post">
            <div class="col-sm-12 mt-5" >
              <label for="validationDefault01" class="form-label"   style="font-family:ibarrarealnova-variablefont;">Full Name</label>
              <input type="text" class="form-control w-100" id="fullName" name="fullName"  style="font-family:ibarrarealnova-variablefont;border-color:#034191;" value="" placeholder="Becca Thompson" required>
            </div>
            <div class="col-sm-12" >
              <label for="validationDefault01" class="form-label"   style="font-family:ibarrarealnova-variablefont;">Your Email</label>
              <input type="email" class="form-control w-100" id="email" name="email"  style="font-family:ibarrarealnova-variablefont;border-color:#034191;" value="" placeholder="example@gmail.com" required>
            </div>
            <div class="col-sm-12" >
              <label for="validationDefault01" class="form-label"   style="font-family:ibarrarealnova-variablefont;">Your Reg No</label>
              <input type="text" class="form-control w-100" id="reg" name="reg"  style="font-family:ibarrarealnova-variablefont;border-color:#034191;" value="" placeholder="CE/17/069" required>
            </div>
            <div class="col-sm-12 " >
              <label for="validationDefault01" class="form-label"   style="font-family:ibarrarealnova-variablefont;">Your Password</label>
              <input type="password" class="form-control w-100" id="pass" name="pass" style="font-family:ibarrarealnova-variablefont;border-color:#034191;" value="" placeholder="*******" required>
            </div>
            <div class="col-md-12 ">
              <label for="validationDefault02" class="form-label"  style="font-family:ibarrarealnova-variablefont;">Confirm Password</label>
              <input type="password" class="form-control w-100" id="confirmPass"  style="font-family:ibarrarealnova-variablefont;border-color:#034191;" value="" placeholder="*******" required>
            </div>
            <div class="mt-4">
              <span  style="font-family:ibarrarealnova-variablefont;color:#034191;">Already have an account? <a href="login.php" >Login</a></span>
            </div>
            <div class="col-12 mt-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="true" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  Agree to terms and conditions
                </label>
              </div>
            </div>
            <div class="" >
              <a href="#"><button type="submit" name="submitRegister" class="btn btn-contact1 " style="font-family:ibarrarealnova-variablefont;">Register</button></a>
            </div>
          </form>
        </div>
      </div>
    <!-- login mobile view end -->

    <!-- login details -->
      <div class="container mt-5 d-none d-sm-block">
        <form class="row g-3" action="register-inc.php" method="post" name="submitRegister" enctype="multipart/form-data">
          <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Becca Thompson" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Your Email</label>
            <input type="email" class="form-control" name="email" id="email" value="" placeholder="example@gmail.com" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">Your Reg No</label>
            <div class="input-group">
              <span class="input-group-text" id="inputGroupPrepend2">Reg</span>
              <input type="text" class="form-control" name="reg" id="reg" placeholder="CE/17/069" aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Password</label>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="********" required>
          </div>
          <div class="col-md-6">
            <label for="validationDefault04" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPass" placeholder="********" required>
          </div>

          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="true" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
              </label>
            </div>
          </div>
          <div class="col-12">
            <a href="#"><button type="submit" name="submitRegister" class="btn btn-color " style="font-family:ibarrarealnova-variablefont;">Register</button></a>
          </div>
        </form>
      </div>
    <!-- login details end -->







    <!-- footer -->
      <div class="container mt-5 footer-sm d-none d-sm-block">
        <div class="row">
          <div class="col-sm-12">
            <hr>
          </div>
          <div class="col-sm-12 footer-text text-center">
            <p>Madonna University 1999 - 2022 &reg;</p>
          </div>
        </div>
      </div>
    <!-- footer end -->

    <!-- bottom nav -->
      <nav class="nav d-sm-none fixed-bottom">
       <a href="index.php" class="nav__link">
         <svg xmlns="http://www.w3.org/2000/svg" width="25" height="28" fill="currentColor" class="bi bi-house text-white" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg>
         <span class="nav__text text-white" style="font-family:ibarrarealnova-variablefont;font-weight:bold;">Home</span>
       </a>
       <a href="post.php" class="nav__link">
         <svg xmlns="http://www.w3.org/2000/svg" width="25" height="28"  fill="currentColor" class="bi bi-mailbox text-white" viewBox="0 0 16 16">
            <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
            <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
          </svg>
         <span class="nav__text text-white" style="font-family:ibarrarealnova-variablefont;font-weight:bold;">Posts</span>
       </a>
       <a href="contact.php" class="nav__link">
         <svg xmlns="http://www.w3.org/2000/svg" width="25" height="28" fill="currentColor" class="bi bi-chat-dots text-white" viewBox="0 0 16 16">
            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
          </svg>
         <span class="nav__text text-white" style="font-family:ibarrarealnova-variablefont;font-weight:bold;">Contact</span>
       </a>
       <a href="login.php" class="nav__link"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="28" fill="currentColor" class="bi bi-box-arrow-in-right text-white" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
          <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg>
         <span class="nav__text text-white" style="font-family:ibarrarealnova-variablefont;font-weight:bold;">Login</span>
       </a>
      </nav>
   <!-- bottom nav end -->













     <script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
     <script src = "https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
     <script type="text/javascript" src="res/bootstrap/js/bootstrap.bundle.js"></script>
     <script type="text/javascript" src="res/bootstrap/js/bootstrap.js"></script>
     <script src="res/js/form.validation.js"></script>
     <script>
         setInterval(function() {
              let alertDev = document.getElementById('alertActivation').classList.add("d-none")
         }, 3500);
    </script>
  </body>
</html>
