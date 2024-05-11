<?php
function getCategories()
{
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT * FROM `tbl_category`";
   $query = mysqli_query($con, $sqlCommand);
   $result = mysqli_fetch_array($query);
   $categoriesArr = array();
   while ($result) {
      array_push($categoriesArr, $result["categoryName"]);
      $result = mysqli_fetch_array($query);
   }
   mysqli_close($con);

   return $categoriesArr;
}

function insertCategory($categoryName)
{
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT `categoryName` FROM `tbl_category` WHERE `categoryName`='$categoryName'";
   $query = mysqli_query($con, $sqlCommand);
   $result = mysqli_fetch_array($query);
   
   if (!$result) {
      $sqlCommand = "INSERT INTO `tbl_category`(`categoryName`) VALUES ('$categoryName')";
      mysqli_query($con, $sqlCommand);
   }
   mysqli_close($con);
}
