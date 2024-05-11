<?php
include './admin/db/mainInfo.php';
$info = getMainInfo();
?>

<header class="h-screen relative">
   <div class="img-div" style="background-image: url('/my-blog/admin/src/images/background/<?php echo $info["imageName"]; ?>');"></div>

   <div class="flex justify-center items-center h-full">
      <div class="text-center">
         <h1 class="text-4xl">
            <?php echo $info["title"]; ?>
         </h1>
         <h2 class="flex gap-2 items-center text-2xl my-10">
            <?php echo $info["subTitle"]; ?>
         </h2>

         <div class="flex justify-center gap-6">
            <a href="<?php echo $info["link1"]; ?>" class="btn">
               <?php echo $info["linkText1"]; ?>
            </a>

            <?php
            if (isset($_SESSION["adminFullName"])) {
               echo "
               <a href='/my-blog/admin/index.php' class='btn'>
                  پنل مدیریت
               </a>";
            } else {
               echo "
               <a href='" . $info["link2"] . "' class='btn'>"
                  . $info["linkText2"] .
               "</a>";
            }
            ?>
         </div>

         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 absolute bottom-0 left-1/2 -translate-x-1/2 animate-bounce">
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
         </svg>
      </div>
   </div>
</header>