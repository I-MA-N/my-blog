<?php
$title = "Blog";
include_once './includes/navbar.php';

include_once './admin/db/blogsActions.php';
if (isset($_GET["blogSubject"]) && !empty($_GET["blogSubject"])) {
   $blog = getOneBlog($_GET["blogSubject"]);
} else {
   echo "
   <div class='container flex items-center justify-center min-h-screen-smaller'>
      <h1 class='text-5xl'>
         صفحه مورد نظر پیدا نشد!
      </h1>
   </div>";
   exit();
}
?>

<main>
   <div class="w-full">
      <div class="bg-cover bg-center h-[600px]" style="background-image: url('./admin/src/images/blogs/<?php echo $blog["blogImgName"]; ?>');" ></div>
   </div>
   <section class="container my-16 relative">
      <span class="inline-block absolute top-0 right-0 w-1 h-[140px]" style="background-color: <?php echo $blog["blogColor"]; ?>;"></span>
      <span class="inline-block absolute bottom-3 left-1/2 -translate-x-1/2 w-[140px] h-1" style="background-color: <?php echo $blog["blogColor"]; ?>;"></span>

      <div class="w-full flex items-center justify-between">
         <h1 class="text-3xl pr-4"><?php echo $blog["blogSubject"]; ?></h1>
         <a href="category.php" class="text-lg"><?php echo $blog["blogCategory"]; ?></a>
      </div>

      <p class="pr-8 text-justify mt-8 mb-12 leading-10">
         <?php echo $blog["blogBody"]; ?>
      </p>

      <div class="w-full flex items-center justify-between relative">
         <div class="flex items-center gap-2 text-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="color: <?php echo $blog["blogColor"]; ?>;">
               <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
            </svg>
            <span><?php echo $blog["blogAuthor"]; ?></span>
         </div>

         <a href="date.php" class="flex items-center gap-2 text-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
               <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
            </svg>
            <span><?php echo $blog["blogDate"]; ?></span>
         </a>

      </div>
   </section>
</main>

<?php
include_once './includes/footer.php';
?>