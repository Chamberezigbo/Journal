<?php
     require_once 'db.php';
     if (isset($_POST['submitRegister'])) {
          $firstName = trim($_POST['fullName']);
          $email = trim($_POST['email']);
          $regNum = trim($_POST['reg']);
          $pass = $_POST['pass'];
          $isPost = 0;
          
          if($firstName === " " && $regNum === " "){
               $_SESSION['error'] = 1;
               $_SESSION['errorMassage'] = " Full name and Reg number must not be empty";
               header("Location:signup.php");
               exit();
          } else {
               $sql = "SELECT email FROM users WHERE email =  ?";
               $stmt = mysqli_stmt_init($conn);
               if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location:index.php?error=sqlerror");
                    exit();
               } else {
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $rowCount = mysqli_stmt_num_rows($stmt);
                    if ($rowCount > 0) {
                         // header("Location:index.php?error=usernameTaken");
                         session_start();
                         $_SESSION['error'] = 1;
                         $_SESSION['errorMassage'] = " Email has been taken";
                         header("Location:signup.php");
                         exit();
                    } else {
                         $sql = " INSERT INTO users (firstName,regNum,password,email,isPost) VALUES (?, ?,?, ?,?)";
                         $stmt = mysqli_stmt_init($conn);
                         if (!mysqli_stmt_prepare($stmt, $sql)) {
                              $_SESSION['error'] = 1;
                              $_SESSION['errorMassage'] = " Error occurred with your login";
                              header("Location:signup.php");
                              exit();
                         } else {
                              $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
                              mysqli_stmt_bind_param($stmt, "sssss", $firstName, $regNum,$hashedPass, $email, $isPost);
                              mysqli_stmt_execute($stmt);
     
                              $sql = "SELECT * FROM users WHERE email = ?";
                              $stmt = mysqli_stmt_init($conn);
                              if (!mysqli_stmt_prepare($stmt, $sql)) {
                                   $_SESSION['error'] = 1;
                                   $_SESSION['errorMassage'] = " Error occurred with your login try login in";
                                   header("Location:signup.php");
                                   exit();
                              } else {
                                   mysqli_stmt_bind_param($stmt, "s", $email);
                                   mysqli_stmt_execute($stmt);
                                   $result = mysqli_stmt_get_result($stmt);
                                   if ($row = mysqli_fetch_assoc($result)) {
                                        session_start();
                                        $_SESSION['auth'] = true;
                                        $_SESSION['start'] = time();
                                        $_SESSION['expire'] = $_SESSION['start'] + (40 * 60);
                                        $_SESSION['error'] = 0;
                                        $_SESSION['email'] = $row['email'];
                                        $_SESSION['firstName'] = $row['firstName'];
                                        $_SESSION['regNum'] = $row['regNum'];
                                        $_SESSION['sessionId'] = $row['id'];
                                        header("Location:user.php");
                                        exit();
                                   }
                              }
                         }
                    }
               };   

          }
          
     };
?>