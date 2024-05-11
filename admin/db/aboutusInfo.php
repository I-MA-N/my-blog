<?php
function getAboutusInfo()
{
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT * FROM `tbl_aboutusinfo`";
   $query = mysqli_query($con, $sqlCommand);
   $result = mysqli_fetch_array($query);
   mysqli_close($con);

   return $result;
}

function updateAboutusInfo($siteTitle, $siteDescription, $socialLink1, $socialLinkText1, $socialLink2, $socialLinkText2)
{
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "UPDATE `tbl_aboutusinfo` SET 
   `siteTitle`='$siteTitle',
   `siteDescription`='$siteDescription',
   `socialLink1`='$socialLink1',
   `socialLinkText1`='$socialLinkText1',
   `socialLink2`='$socialLink2',
   `socialLinkText2`='$socialLinkText2'";
   
   mysqli_query($con, $sqlCommand);
   mysqli_close($con);
}
