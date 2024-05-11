<?php 
if (session_status() === PHP_SESSION_NONE) {
   session_start();
}
if (isset($_GET["deleteSession"])) {
   session_unset();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/my-blog/src/css/output.css">

   <title>MyBlog - <?php echo $title; ?></title>
</head>

<body dir="rtl" class="font-Vazir bg-zinc-800 text-zinc-100">

   <nav class="mt-4 h-20 bg-black/50 backdrop-blur rounded-2xl fixed left-1/2 -translate-x-1/2 w-[90%] z-10">
      <div class="flex items-center justify-between h-full px-32">
         <?php
         include_once __DIR__ . '/menuOrLoginBtn.php';
         ?>

         <div class="flex items-center justify-center gap-8">
            <a href="/my-blog/index.php" class="hover:text-red-500 transition-colors duration-200">خانه</a>
            <a href="/my-blog/aboutus.php" class="hover:text-red-500 transition-colors duration-200">درباره ما</a>
            <a href="/my-blog/contactus.php" class="hover:text-red-500 transition-colors duration-200">ارتباط با ما</a>
         </div>
      </div>
   </nav>

   <?php
   include_once __DIR__ . '/menuDivOrNot.php';
   ?>