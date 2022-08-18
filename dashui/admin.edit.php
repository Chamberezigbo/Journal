<?php
require("../db.php");
if (isset($_GET['updateId'])) {
     $id = $_GET['updateId'];
          $sql = "UPDATE  users SET isPost = 1  WHERE id=$id";
          $result = mysqli_query($conn, $sql);
          if ($result) {
               header("location:index.php");
          } else {
               echo (mysqli_error($conn));
               header("location:index.php?error=mysqli_error");
          }
}