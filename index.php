<?php
$title = "Homepage";
include_once './includes/navbar.php';
include_once './includes/header.php';

include_once './admin/db/blogsActions.php';
if (isset($_GET["date"]) && !empty($_GET["date"])) {
   $blogs = getBlogsWithDate($_GET["date"]);
} elseif (isset($_GET["category"]) && !empty($_GET["category"])) {
   $blogs = getBlogsWithCategory($_GET["category"]);
} else {
   $blogs = getBlogs();
}
?>

<main>
   <section class="container my-16">
      <?php
         $sectionTitle = "وبلاگ های ما";
         include_once './includes/title.php';
      ?>

      <div class="flex flex-col items-center">

         <?php
            foreach ($blogs as  $blog) {
               $blogSubject = $blog["blogSubject"];
               $blogBody = $blog["blogBody"];
               $blogAuthor = $blog["blogAuthor"];
               $blogImgName = $blog["blogImgName"];
               $blogCategory = $blog["blogCategory"];
               $blogDate = $blog["blogDate"];
               $blogColor = $blog["blogColor"];
               echo "
               <div class='flex gap-12 my-12 relative w-full'>
                  <span class='inline-block absolute left-0 top-0 w-[140px] h-1' style='background-color: $blogColor;'></span>

                  <div class='flex shrink-0'>
                     <div class='flex flex-col items-center justify-end gap-4 pl-4'>
                        <span class='inline-block w-1 h-[140px]' style='background-color: $blogColor;'></span>
                        <a href='index.php?category=$blogCategory' class='text-rotate'>$blogCategory</a>
                     </div>
                     <div class='w-[580px] h-80 rounded-[48px] bg-center bg-cover' style='background-image: url(\"./admin/src/images/blogs/$blogImgName\");'></div>
                  </div>
      
                  <div class='pr-10 w-full'>
                     <span class='text-2xl'>
                        - $blogSubject
                     </span>
                     <p class='line-clamp-6 mt-6 mb-10 pr-4 text-justify'>
                        $blogBody
                     </p>
                     <div class='flex items-center justify-between'>
                        <div class='flex items-center gap-8'>
                           <div class='flex items-center gap-2'>
                              <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5'>
                                 <path stroke-linecap='round' stroke-linejoin='round' d='m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10' />
                              </svg>
                              <span>$blogAuthor</span>
                           </div>
      
                           <a href='index.php?date=$blogDate' class='flex items-center gap-2'>
                              <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5'>
                                 <path stroke-linecap='round' stroke-linejoin='round' d='M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5' />
                              </svg>
                              <span>$blogDate</span>
                           </a>
                        </div>
                        <a href='blog.php?blogSubject=$blogSubject' class='inline-flex items-center justify-end gap-2 border-b pb-1 group' style='border-color: $blogColor;'>
                           دیدن وبلاگ
                           <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5 group-hover:mr-2 transition-all duration-200'>
                              <path stroke-linecap='round' stroke-linejoin='round' d='M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18' />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               ";
            }
         ?>

      </div>
   </section>
</main>

<?php
include_once './includes/footer.php';
?>