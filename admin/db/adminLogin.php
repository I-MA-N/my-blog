<?php
function adminLogin($username, $password)
{
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT `fullName` FROM `tbl_admins` WHERE `username`='$username' AND `password`='$password'";
   $query = mysqli_query($con, $sqlCommand);
   $result = mysqli_fetch_array($query);
   mysqli_close($con);

   return $result;
}