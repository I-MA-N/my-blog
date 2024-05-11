<?php
$title = "Contact us";
include_once './includes/navbar.php';
include_once './includes/header.php';

include_once './admin/db/insertMessage.php';
if (isset($_POST["messageSubject"]) && !empty($_POST["messageSubject"]))
{
   insertMessage($_POST["messageSubject"], $_POST["messageBody"]);
}
?>

<main>
   <section class="container my-16">
      <?php
      $sectionTitle = "ارتباط با ما";
      include_once './includes/title.php';
      ?>

      <form class="w-[500px] flex flex-col mx-auto gap-6" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
         <div class="relative z-0 w-full group">
            <input type="text" name="messageSubject" id="messageSubject" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
            <label for="messageSubject" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
               موضوع پیام
            </label>
         </div>

         <div>
            <label for="messageBody" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">متن پیام</label>
            <textarea id="messageBody" name="messageBody" rows="10" class="outline-none block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500 bg-zinc-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="هرچه دل تنگت می خواهد بگو..."></textarea>
         </div>

         <button type="submit" class="form-btn">
            ارسال پیام
         </button>
      </form>

   </section>
</main>

<?php
include_once './includes/footer.php';
?>