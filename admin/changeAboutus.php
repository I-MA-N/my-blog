<?php
$title = "Admin";
include_once "../includes/navbar.php";
include_once "./includes/checkSession.php";

include_once './db/aboutusInfo.php';
$info = getAboutusInfo();
?>

<main>
   <section class="container pt-32 pb-16 flex flex-col items-center min-h-screen-smaller">
      <?php
      $sectionTitle = "تغییر مشخصات درباره ما";
      include_once '../includes/title.php';
      ?>

      <form class="w-[400px] flex flex-col mx-auto gap-6" action="./index.php" method="POST">
         <div class="relative z-0 w-full group">
            <input dir="ltr" type="text" name="siteTitle" id="siteTitle" value="<?php echo $info["siteTitle"]; ?>" class="font-OpenSans block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
            <label for="siteTitle" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
               عنوان سایت
            </label>
         </div>

         <div>
            <label for="siteDescription" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">توضیحات سایت</label>
            <textarea id="siteDescription" name="siteDescription" rows="10" class="outline-none block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500 bg-zinc-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="متن توضیحات سایت"> <?php echo $info["siteDescription"]; ?> </textarea>
         </div>

         <div class="flex gap-4 items-center">
            <div class="relative z-0 w-full group">
               <input dir="ltr" type="text" name="socialLink1" id="socialLink1" value="<?php echo $info["socialLink1"]; ?>" class="font-OpenSans block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
               <label for="socialLink1" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  لینک شبکه اجتماعی 1
               </label>
            </div>
            <div class="relative z-0 w-full group">
               <input type="text" name="socialLinkText1" id="socialLinkText1" value="<?php echo $info["socialLinkText1"]; ?>" class="font-OpenSans block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
               <label for="socialLinkText1" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  متن شبکه اجتماعی 1
               </label>
            </div>
         </div>

         <div class="flex gap-4 items-center">
            <div class="relative z-0 w-full group">
               <input dir="ltr" type="text" name="socialLink2" id="socialLink2" value="<?php echo $info["socialLink2"]; ?>" class="font-OpenSans block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
               <label for="socialLink2" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  لینک شبکه اجتماعی 2
               </label>
            </div>
            <div class="relative z-0 w-full group">
               <input type="text" name="socialLinkText2" id="socialLinkText2" value="<?php echo $info["socialLinkText2"]; ?>" class="font-OpenSans block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-red-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
               <label for="socialLinkText2" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  متن شبکه اجتماعی 2
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