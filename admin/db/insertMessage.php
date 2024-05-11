<?php
function insertMessage($messageSubject, $messageBody) {
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT `messageId` FROM `tbl_messages` WHERE `messageSubject`='$messageSubject'";
   $query = mysqli_query($con, $sqlCommand);
   $result = mysqli_fetch_array($query);
   if (!$result) {
      $sqlCommand = "INSERT INTO `tbl_messages`(`messageSubject`, `messageBody`) VALUES ('$messageSubject','$messageBody')";
      mysqli_query($con, $sqlCommand);
      echo "<script>alert('پیام شما با موفقیت ارسال شد')</script>";
   }
   mysqli_close($con);
}