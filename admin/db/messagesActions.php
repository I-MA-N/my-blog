<?php
function getMessages() {
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT * FROM `tbl_messages`";
   $query = mysqli_query($con, $sqlCommand);
   $message = mysqli_fetch_array($query);
   $messagesArr = array();
   while ($message) {
      array_push($messagesArr, $message);
      $message = mysqli_fetch_array($query);
   }
   mysqli_close($con);

   return $messagesArr;
}

function deleteMessage($messageId) {
   $con = mysqli_connect("localhost", "root", "", "my-blog");
   $sqlCommand = "SELECT `messageId` FROM `tbl_messages` WHERE `messageId`='$messageId'";
   $query = mysqli_query($con, $sqlCommand);
   $result = mysqli_fetch_array($query);
   if ($result) {
      $sqlCommand = "DELETE FROM `tbl_messages` WHERE `messageId`='$messageId'";
      mysqli_query($con, $sqlCommand);
   }
   mysqli_close($con);
}