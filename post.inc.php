<?php
     session_start();
     if (isset($_POST['post'])) {
          require 'db.php';
          $postMessage = trim($_POST['article']);
          $userId = $_SESSION['sessionId'];

          $sql = "UPDATE  users SET post ='$postMessage'  WHERE id=$userId";
          $result = mysqli_query($conn, $sql);
          if ($result) {
               header("location:user.php");
               session_start();
               $_SESSION['error'] = 1;
               $_SESSION['errorMassage'] = "Post sent successfully waiting for approval";
          } else {
                session_start();
               $_SESSION['error'] = 1;
               $_SESSION['errorMassage'] = "Error occurred while posting";
               header("location:user.php");
          }
     }

