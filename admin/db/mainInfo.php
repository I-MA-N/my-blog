<?php
function getMainInfo()
{
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT * FROM `tbl_maininfo`";
   $query = mysqli_query($con, $sqlCommand);
   $result = mysqli_fetch_array($query);
   mysqli_close($con);

   return $result;
}

function updateMainInfo($title, $subTitle, $imageFile, $link1, $linkText1, $link2, $linkText2) {
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   if (file_exists($imageFile["tmp_name"])) {
      $imageName = basename($imageFile["name"]);
      $imageAddress = str_replace("\db", "\src", __DIR__) . "\images\background\\" . $imageName;
      move_uploaded_file($imageFile["tmp_name"], $imageAddress);
      $sqlCommand = "UPDATE `tbl_maininfo` SET 
      `title`='$title',
      `subTitle`='$subTitle',
      `imageName`='$imageName',
      `link1`='$link1',
      `linkText1`='$linkText1',
      `link2`='$link2',
      `linkText2`='$linkText2'";
   } else {
      $sqlCommand = "UPDATE `tbl_maininfo` SET 
      `title`='$title',
      `subTitle`='$subTitle',
      `link1`='$link1',
      `linkText1`='$linkText1',
      `link2`='$link2',
      `linkText2`='$linkText2'";
   }
   mysqli_query($con, $sqlCommand);
   mysqli_close($con);
}