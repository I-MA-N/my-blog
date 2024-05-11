<?php
function getBlogs()
{
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT * FROM `tbl_blogs`";
   $query = mysqli_query($con, $sqlCommand);
   $blog = mysqli_fetch_array($query);
   $blogsArr = array();
   while ($blog) {
      array_push($blogsArr, $blog);
      $blog = mysqli_fetch_array($query);
   }
   mysqli_close($con);

   return $blogsArr;
}

function getBlogsWithDate($blogDate)
{
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT * FROM `tbl_blogs` WHERE `blogDate`='$blogDate'";
   $query = mysqli_query($con, $sqlCommand);
   $blog = mysqli_fetch_array($query);
   $blogsArr = array();
   while ($blog) {
      array_push($blogsArr, $blog);
      $blog = mysqli_fetch_array($query);
   }
   mysqli_close($con);

   return $blogsArr;
}

function getBlogsWithCategory($blogCategory)
{
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT * FROM `tbl_blogs` WHERE `blogCategory`='$blogCategory'";
   $query = mysqli_query($con, $sqlCommand);
   $blog = mysqli_fetch_array($query);
   $blogsArr = array();
   while ($blog) {
      array_push($blogsArr, $blog);
      $blog = mysqli_fetch_array($query);
   }
   mysqli_close($con);

   return $blogsArr;
}

function getOneBlog($blogSubject)
{
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT * FROM `tbl_blogs` WHERE `blogSubject`='$blogSubject'";
   $query = mysqli_query($con, $sqlCommand);
   $blog = mysqli_fetch_array($query);
   mysqli_close($con);

   return $blog;
}

function insertBlog($blogSubject, $blogBody, $blogImgFile, $blogCategory, $blogColor)
{
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT `blogSubject` FROM `tbl_blogs` WHERE `blogSubject`='$blogSubject'";
   $query = mysqli_query($con, $sqlCommand);
   $result = mysqli_fetch_array($query);

   if ( !$result && file_exists($blogImgFile["tmp_name"]) ) {
      $blogImgName = basename($blogImgFile["name"]);
      $blogImgAddress = str_replace("\db", "\src", __DIR__) . "\images\blogs\\" . $blogImgName;
      move_uploaded_file($blogImgFile["tmp_name"], $blogImgAddress);

      $blogDate = getCurrentTime();
      $blogAuthor = $_SESSION["adminFullName"];

      $sqlCommand = "INSERT INTO `tbl_blogs` VALUES ('$blogSubject','$blogBody','$blogAuthor','$blogImgName','$blogCategory','$blogDate','$blogColor')";
      mysqli_query($con, $sqlCommand);
   }

   mysqli_close($con);
}

function deleteBlog($blogSubject)
{
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT `blogSubject` FROM `tbl_blogs` WHERE `blogSubject`='$blogSubject'";
   $query = mysqli_query($con, $sqlCommand);
   $result = mysqli_fetch_array($query);

   if ($result) {
      $sqlCommand = "DELETE FROM `tbl_blogs` WHERE `blogSubject`='$blogSubject'";
      mysqli_query($con, $sqlCommand);
   }

   mysqli_close($con);
}

function updateBlog($prevBlogSubject, $blogSubject, $blogBody, $blogAuthor, $blogImg, $blogCategory, $blogDate, $blogColor)
{
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   if (!is_string($blogImg) && file_exists($blogImg["tmp_name"])) {
      $blogImgName = basename($blogImg["name"]);
      $blogImgAddress = str_replace("\db", "\src", __DIR__) . "\images\blogs\\" . $blogImgName;
      move_uploaded_file($blogImg["tmp_name"], $blogImgAddress);

      $sqlCommand = "UPDATE `tbl_blogs` SET 
      `blogSubject`='$blogSubject',
      `blogBody`='$blogBody',
      `blogAuthor`='$blogAuthor',
      `blogImgName`='$blogImgName',
      `blogCategory`='$blogCategory',
      `blogDate`='$blogDate',
      `blogColor`='$blogColor'
      WHERE `blogSubject`='$prevBlogSubject'";
   } else {
      $sqlCommand = "UPDATE `tbl_blogs` SET 
      `blogSubject`='$blogSubject',
      `blogBody`='$blogBody',
      `blogAuthor`='$blogAuthor',
      `blogImgName`='$blogImg',
      `blogCategory`='$blogCategory',
      `blogDate`='$blogDate',
      `blogColor`='$blogColor'
      WHERE `blogSubject`='$prevBlogSubject'";
   }
   
   mysqli_query($con, $sqlCommand);
   mysqli_close($con);
}

function getCurrentTime() {
   $now = new DateTime();
   $formatter = new IntlDateFormatter(
      "fa_IR@calendar=persian",
      IntlDateFormatter::FULL,
      IntlDateFormatter::FULL,
      'Asia/Tehran',
      IntlDateFormatter::TRADITIONAL,
      "yyyy-MM-dd"
   );

   return $formatter->format($now);
}