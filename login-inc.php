<?php

if (isset($_POST['login'])) {
     require 'db.php';
     $email = trim($_POST['email']);
     $password = $_POST['password'];
     $regNum = trim($_POST['regNum']);

     if ($email == "admin@mail.com" && $password == "admin12345") {
          session_start();
          $_SESSION['auth'] = true;
          $_SESSION['start'] = time();
          $_SESSION['expire'] = $_SESSION['start'] + (40 * 60);
          $_SESSION['error'] = 0;
          header("location:dashui/index.php");
     } else {
          $sql = "SELECT * FROM users WHERE email = ? AND regNum = ?";
          $stmt = mysqli_stmt_init($conn);

          if (!mysqli_stmt_prepare($stmt, $sql)) {
               session_start();
               $_SESSION['error'] = 1;
               $_SESSION['errorMassage'] = " Error occurred with your login";
               header("Location:login.php");
               exit();
          } else {
               mysqli_stmt_bind_param($stmt, "ss", $email, $regNum);
               mysqli_stmt_execute($stmt);
               $result = mysqli_stmt_get_result($stmt);
               if ($row = mysqli_fetch_assoc($result)) {
                    if (password_verify($password, $row['password'])) {
                         session_start();
                         $_SESSION['auth'] = true;
                         $_SESSION['start'] = time();
                         $_SESSION['expire'] = $_SESSION['start'] + (40 * 60);
                         $_SESSION['error'] = 0;
                         $_SESSION['sessionId'] = $row['id'];
                         $_SESSION['firstName'] = $row['firstName'];

                         header("Location:user.php");
                    } else {
                         session_start();
                         $_SESSION['error'] = 1;
                         $_SESSION['errorMassage'] = " Invalid password.";
                         header("Location:login.php");
                    }
               } else {
                    session_start();
                    $_SESSION['error'] = 1;
                    $_SESSION['errorMassage'] = " Email, Reg Number or Password not valid";
                    header("Location:login.php");
               }
          }
     }

}
