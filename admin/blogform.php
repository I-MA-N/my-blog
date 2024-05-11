<?php
$title = "Admin";
include_once "../includes/navbar.php";
include_once "./includes/checkSession.php";

include_once './db/categories.php';
if (isset($_POST["newCategory"]) && !empty($_POST["newCategory"])) {
   insertCategory($_POST["newCategory"]);
}
$categories = getCategories();

include_once './db/blogsActions.php';
if (isset($_POST["editBlog"]) && !empty($_POST["editBlog"])) {
   $blogInfo = getOneBlog($_POST["editBlog"]);
}
?>

<main>
   <section class="container pt-32 pb-16 flex flex-col items-center min-h-screen-smaller">
      <?php
      $sectionTitle = "اضافه کردن وبلاگ جدید";
      include_once '../includes/title.php';
      ?>

      <div class="flex flex-col gap-20">
         <form class="w-[550px] flex flex-col mx-auto gap-6" action="./index.php" method="POST" enctype="multipart/form-data">
            <?php if (isset($blogInfo)) 
               echo "
                  <input name='prevBlogSubject' value='" .$blogInfo["blogSubject"]. "' hidden />
                  <input name='blogDate' value='" .$blogInfo["blogDate"]. "' hidden />
                  <input name='blogAuthor' value='" .$blogInfo["blogAuthor"]. "' hidden />
                  <input name='blogImgName' value='" .$blogInfo["blogImgName"]. "' hidden />
               "; 
            ?>

            <div class="relative z-0 w-full group">
               <input type="text" name="blogSubject" id="blogSubject" value="<?php if (isset($blogInfo)) echo $blogInfo["blogSubject"]; ?>" required class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " />
               <label for="blogSubject" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  موضوع وبلاگ
               </label>
            </div>
   
            <div class="flex gap-4 items-center">
               <label for="blogCategory" class="flex-shrink-0">دسته بندی :</label>
               <select name="blogCategory" id="blogCategory" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-red-600 peer">
               <?php 
                  foreach ($categories as $key => $category) {
                     if (isset($blogInfo) && $blogInfo["blogCategory"] == $category) {
                        echo "<option class='text-zinc-700' value='$category' selected>$category</option>";
                     } elseif ($key == 0) {
                        echo "<option class='text-zinc-700' value='$category' selected>$category</option>";
                     } else {
                        echo "<option class='text-zinc-700' value='$category'>$category</option>";
                     }
                  }
               ?>   
               </select>
            </div>
   
            <div class="flex gap-4 items-center flex-wrap">
               <label for="blogColor">رنگ وبلاگ :</label>
               <div class="flex items-center">
                  <input id="red" type="radio" value="red" name="blogColor" required checked class="w-4 h-4 ml-2">
                  <label for="red" class="w-full py-1 px-2 text-sm text-white rounded-lg" style="background-color: red;">قرمز</label>
               </div>
               <div class="flex items-center">
                  <input id="blue" type="radio" value="blue" name="blogColor" class="w-4 h-4 ml-2">
                  <label for="blue" class="w-full py-1 px-2 text-sm text-white rounded-lg" style="background-color: blue;">آبی</label>
               </div>
               <div class="flex items-center">
                  <input id="green" type="radio" value="green" name="blogColor" class="w-4 h-4 ml-2">
                  <label for="green" class="w-full py-1 px-2 text-sm text-white rounded-lg" style="background-color: green;">سبز</label>
               </div>
               <div class="flex items-center">
                  <input id="purple" type="radio" value="purple" name="blogColor" class="w-4 h-4 ml-2">
                  <label for="purple" class="w-full py-1 px-2 text-sm text-white rounded-lg" style="background-color: purple;">بنفش</label>
               </div>
               <div class="flex items-center">
                  <input id="cyan" type="radio" value="cyan" name="blogColor" class="w-4 h-4 ml-2">
                  <label for="cyan" class="w-full py-1 px-2 text-sm text-black rounded-lg" style="background-color: cyan;">فیروزه ای</label>
               </div>
               <div class="flex items-center">
                  <input id="black" type="radio" value="black" name="blogColor" class="w-4 h-4 ml-2">
                  <label for="black" class="w-full py-1 px-2 text-sm text-white rounded-lg" style="background-color: black;">مشکی</label>
               </div>
            </div>
   
            <div>
               <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="blogImg">عکس وبلاگ :</label>
               <input type="file" id="blogImg" name="blogImg" <?php if (!isset($blogInfo)) echo "required" ?> class="bg-zinc-700 cursor-pointer rounded-lg w-full">
            </div>
   
            <div>
               <label for="blogBody" class="block mb-2 text-gray-900 dark:text-white">متن وبلاگ</label>
               <textarea id="blogBody" name="blogBody" required rows="10" class="outline-none block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500 bg-zinc-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"><?php if (isset($blogInfo)) echo $blogInfo["blogBody"]; ?></textarea>
            </div>
   
            <button type="submit" class="form-btn">
               تایید
            </button>
         </form>

         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="flex gap-1 items-center shrink-0">
            <div class="relative z-0 w-full group">
               <input type="text" name="newCategory" id="newCategory" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " />
               <label for="newCategory" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  دسته بندی جدید
               </label>
            </div>
            <button type="submit">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-w-8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
               </svg>
            </button>
         </form>
      </div>

   </section>
</main>

<?php
include_once "../includes/footer.php";
?>