<?php
require 'db.php';
?>
<!DOCTYPE php>
<php lang="en" dir="ltr">
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
    


    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="banner" style="font-family:ibarrarealnova-variablefont;">
            Online Madonna Computer Engineering Journal Review And Assessment Platform.
          </h1>
          <div class="mt-5 btn-footer">
            <a href="login.php"><button type="button" class="btn btn-lg banner-btn " style="font-family:ibarrarealnova-variablefont;">Login</button></a>
            <a href="signup.php"><button type="button" class="btn btn-lg banner-btn1" style="font-family:ibarrarealnova-variablefont;">Sign Up</button></a>
          </div>
        </div>
        <div class="col-sm-6">
          <img src="images/review.svg" class="img-fluid reivew-img" alt="">
        </div>
      </div>
    </div>


         <!-- card-post -->
     <?php
     $sql = "Select * from `users`";
     $result = mysqli_query($conn, $sql);
     if ($result) {
          $num = 0;
          while ($row = mysqli_fetch_assoc($result)) {
               if($row['isPost'] == true){
               $id = $row['id'];
               $firstName = $row['firstName'];
               $postArticle = $row['post'];
               $email = $row['email'];
              ?>

               <div class="container mb-5 pb-5">
                    <p class="banner text-center mb-3"style="font-family:ibarrarealnova-variablefont;"> Current Post</p>
               <div class="row">
                    <div class="col-sm-6">
                    <div class="card card-line">
                    <div class="card-header" style="font-family:ibarrarealnova-variablefont;">
                         <?= "This post was made by " .$firstName?>
                    </div>
                    <div class="card-body">
                         <h5 class="card-title" style="font-family:ibarrarealnova-variablefont;"><?= $email?></h5>
                         <p class="card-text" style="font-family:ibarrarealnova-variablefont;"><?= "Madonna Computer Engineering Journal " .$postArticle?></p>
                         <!-- Button trigger modal -->
                         <button type="button" class="btn btn-post" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="font-family:ibarrarealnova-variablefont;">
                              Read More
                         </button>
                         <!-- Modal -->
                         <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                              <div class="modal-content">
                              <div class="modal-header">
                                   <h5 class="modal-title" id="staticBackdropLabel" style="font-family:ibarrarealnova-variablefont;"><?= $firstName."s post"?></h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                   <p  style="font-family:ibarrarealnova-variablefont;"><?= $postArticle?></p>
                              </div>
                              <div class="modal-footer">
                                   <button type="button" class="btn btn-post" data-bs-dismiss="modal" style="font-family:ibarrarealnova-variablefont;">Close</button>
                                   <button type="button" class="btn btn-post" style="font-family:ibarrarealnova-variablefont;">Report</button>
                              </div>
                              </div>
                              </div>
                         </div>
                         <!-- button trigger modal end  -->
                    </div>
                    </div>
                    </div>
               </div>
               <?php } else {?>
               <div class="text-center text-primary display-6"style="font-family:ibarrarealnova-variablefont;">No Content</div> 
     <?php } } } ?>











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







    <script type="text/javascript" src="res/bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="res/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="res/bootstrap/js/bootstrap.js"></script>
     <script>
         setInterval(function() {
              let alertDev = document.getElementById('alertActivation').classList.add("d-none")
         }, 3500);
    </script>
  </body>
</php>
