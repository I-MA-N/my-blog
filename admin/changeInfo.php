<?php
$title = "Admin";
include_once "../includes/navbar.php";
include_once "./includes/checkSession.php";

include_once "./db/mainInfo.php";
$info = getMainInfo();
?>

<main>
   <section class="container pt-32 pb-16 flex flex-col items-center min-h-screen-smaller">
      <?php
      $sectionTitle = "تغییر مشخصات سایت";
      include_once '../includes/title.php';
      ?>

      <form class="w-[400px] flex flex-col mx-auto gap-6" action="./index.php" method="POST" enctype="multipart/form-data">
         <div class="relative z-0 w-full group">
            <input type="text" name="title" id="title" value="<?php echo $info["title"]; ?>" class="block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
            <label for="title" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
               عنوان وبلاگ
            </label>
         </div>

         <div class="relative z-0 w-full group">
            <input type="text" name="subTitle" id="subTitle" value="<?php echo $info["subTitle"]; ?>" class="block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
            <label for="subTitle" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
               زیر عنوان وبلاگ
            </label>
         </div>

         <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">عکس وبلاگ :</label>
            <input type="file" id="image" name="image" class="bg-zinc-700 cursor-pointer rounded-lg w-full">
         </div>

         <div class="flex gap-4 items-center">
            <div class="relative z-0 w-full group">
               <input dir="ltr" type="text" name="link1" id="link1" value="<?php echo $info["link1"]; ?>" class="font-OpenSans block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
               <label for="link1" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  لینک 1
               </label>
            </div>
            <div class="relative z-0 w-full group">
               <input type="text" name="linkText1" id="linkText1" value="<?php echo $info["linkText1"]; ?>" class="block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
               <label for="linkText1" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  متن 1
               </label>
            </div>
         </div>

         <div class="flex gap-4 items-center">
            <div class="relative z-0 w-full group">
               <input dir="ltr" type="text" name="link2" id="link2" value="<?php echo $info["link2"]; ?>" class="font-OpenSans block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
               <label for="link2" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  لینک 2
               </label>
            </div>
            <div class="relative z-0 w-full group">
               <input type="text" name="linkText2" id="linkText2"  value="<?php echo $info["linkText2"]; ?>"class="block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
               <label for="linkText2" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  متن 2
               </label>
            </div>
         </div>

         <button type="submit" class="form-btn">
            تایید
         </button>
      </form>
   </section>
</main>

<?php
include_once "../includes/footer.php";
?>