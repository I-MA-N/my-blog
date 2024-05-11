<?php
function insertAdmin($username, $password, $fullName) {
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT `fullName` FROM `tbl_admins` WHERE `fullName` = '$fullName'";
   $query = mysqli_query($con, $sqlCommand);
   $result = mysqli_fetch_array($query);
   if (!$result) {
      $sqlCommand = "INSERT INTO `tbl_admins`(`fullName`, `username`, `password`) VALUES ('$fullName','$username','$password')";
      mysqli_query($con, $sqlCommand);
   }
   mysqli_close($con);
}