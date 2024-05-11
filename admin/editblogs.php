<?php
$title = "Admin";
include_once "../includes/navbar.php";
include_once "./includes/checkSession.php";

include_once './db/blogsActions.php';
if (isset($_POST["deleteBlog"]) && !empty($_POST["deleteBlog"])) {
   deleteBlog($_POST["deleteBlog"]);
}
$blogs = getBlogs();
?>

<main>
   <section class="container pt-32 pb-16 min-h-screen-smaller">
      <?php
      $sectionTitle = "ویرایش وبلاگ ها";
      include_once '../includes/title.php';
      ?>

      <div class="grid grid-cols-2 gap-x-8 gap-y-12">
         <?php
            foreach ($blogs as $key => $blog) {
               $blogSubject = $blog["blogSubject"];
               $blogBody = $blog["blogBody"];
               $blogAuthor = $blog["blogAuthor"];
               $blogImgName = $blog["blogImgName"];
               $blogCategory = $blog["blogCategory"];
               $blogDate = $blog["blogDate"];
               $blogColor = $blog["blogColor"];

               $formActionStr = htmlspecialchars($_SERVER["PHP_SELF"]);
               echo "
               <div class='flex gap-4 relative'>
                  <div class='w-2/5 bg-cover bg-center shrink-0' style='background-image: url(\"./src/images/blogs/$blogImgName\");'></div>
      
                  <div class='pr-3 pl-1 w-full flex flex-col justify-between'>
                     <div>
                        <span class='text-xl'>$blogSubject</span>
         
                        <p class='line-clamp-5 text-justify text-sm my-3'>
                           $blogBody
                        </p>
                     </div>
      
                     <div>
                        <div class='flex items-center justify-between mb-4'>
                           <div class='flex items-center gap-2'>
                              <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5'>
                                 <path stroke-linecap='round' stroke-linejoin='round' d='m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10' />
                              </svg>
                              <span>$blogAuthor</span>
                           </div>
         
                           <div class='flex items-center gap-2'>
                              <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5'>
                                 <path stroke-linecap='round' stroke-linejoin='round' d='M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z' />
                              </svg>
                              <span class='inline-block rounded-lg w-6 h-6' style='background-color: $blogColor;'></span>
                           </div>
                        </div>
                        <div class='flex items-center justify-between'>
                           <span class='flex items-center gap-2'>
                              <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5'>
                                 <path stroke-linecap='round' stroke-linejoin='round' d='M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5' />
                              </svg>
                              <span>$blogDate</span>
                           </span>

                           <span class='flex items-center gap-2'>
                              <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5'>
                                 <path stroke-linecap='round' stroke-linejoin='round' d='M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z' />
                                 <path stroke-linecap='round' stroke-linejoin='round' d='M6 6h.008v.008H6V6Z' />
                              </svg>
                              <span>$blogCategory</span>
                           </span>
                        </div>
                     </div>
                  </div>
      
                  <button class='absolute -top-1 left-0 z-10' onclick='showHideActionMenu($key)'>
                     <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-7 h-7'>
                        <path stroke-linecap='round' stroke-linejoin='round' d='M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z' />
                     </svg>
                  </button>
      
                  <div class='absolute top-8 left-0 z-10 bg-zinc-700 p-4 text-sm hidden' id='actionMenu$key'>
                     <form action='$formActionStr' method=\"POST\">
                        <input name=\"deleteBlog\" value=\"$blogSubject\" hidden />

                        <button type='submit' class='flex items-center gap-2 text-red-500'>
                           <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-4 h-4'>
                              <path stroke-linecap='round' stroke-linejoin='round' d='m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0' />
                           </svg>
                           حذف
                        </button>
                     </form>
      
                     <form action='blogform.php' method=\"POST\">
                        <input name=\"editBlog\" value=\"$blogSubject\" hidden />

                        <button type='submit' class='flex items-center gap-2 text-yellow-400 mt-4'>
                           <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-4 h-4'>
                              <path stroke-linecap='round' stroke-linejoin='round' d='m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125' />
                           </svg>
                           ویرایش
                        </button>
                     </form>
                  </div>
               </div>
               ";
            }
         ?>
      </div>
   </section>
</main>

<script src="./src/js/editblogs.js"></script>
<?php
include_once "../includes/footer.php";
?>