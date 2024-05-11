<?php
$title = "Login";
include_once './includes/navbar.php';
include_once './includes/header.php';
?>

<main>
   <section class="container my-16">
      <?php
      $sectionTitle = "ورود مدیریت";
      include_once './includes/title.php';
      ?>

      <form class="w-[400px] mx-auto" action="./admin/index.php" method="POST">
         <div class="relative z-0 w-full mb-6 group">
            <input type="text" dir="ltr" name="username" id="username" class="font-OpenSans block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " />
            <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
               نام کاربری
            </label>
         </div>

         <div class="relative z-0 w-full group">
            <input type="text" dir="ltr" name="password" id="password" class="font-OpenSans block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " />
            <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
               رمز عبور
            </label>
         </div>

         <button type="submit" class="flex gap-2 items-center mt-8 text-white bg-zinc-700 hover:scale-110 duration-200 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            ورود
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
               <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
         </button>
      </form>

   </section>
</main>

<?php
include_once './includes/footer.php';
?>