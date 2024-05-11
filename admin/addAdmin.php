<?php
$title = "Admin";
include_once "../includes/navbar.php";
include_once "./includes/checkSession.php";
?>

<main>
   <section class="container pt-32 pb-16 flex flex-col items-center min-h-screen-smaller">
      <?php
      $sectionTitle = "اضافه کردن مدیر جدید";
      include_once '../includes/title.php';
      ?>

      <form class="w-[400px] flex flex-col mx-auto gap-6" action="./index.php" method="POST">
         <div class="relative z-0 w-full group">
            <input dir="ltr" type="text" name="newUsername" id="newUsername" class="font-OpenSans block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
            <label for="newUsername" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
               نام کاربری
            </label>
         </div>

         <div class="relative z-0 w-full group">
            <input dir="ltr" type="text" name="newPassword" id="newPassword" class="font-OpenSans block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
            <label for="newPassword" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
               رمز عبور
            </label>
         </div>

         <div class="relative z-0 w-full group">
            <input type="text" name="newFullName" id="newFullName" class="block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
            <label for="newFullName" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
               اسم کامل
            </label>
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