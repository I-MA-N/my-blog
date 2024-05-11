<?php
$title = "Admin";
include_once "../includes/navbar.php";
include_once "./includes/checkSession.php";

include_once "./db/messagesActions.php";
$messages = getMessages();
?>

<main>
   <section class="container pt-32 pb-16 min-h-screen-smaller">
      <?php
      $sectionTitle = "پیام های کاربران";
      include_once '../includes/title.php';
      ?>

      <div class="grid grid-cols-2 gap-8">
         <?php
         foreach ($messages as $message) {
            $messageId = $message["messageId"];
            $messageSubject = $message["messageSubject"];
            $messageBody = $message["messageBody"];
            echo "
            <div>
               <div class='flex items-center gap-4 border-r-2 pr-2'>
                  <span class='text-xl'>$messageSubject</span>
                  <form action='index.php' method='POST'>
                     <input name='messageId' value='$messageId' hidden />
                     <button type='submit' class='text-red-500'>
                        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                           <path stroke-linecap='round' stroke-linejoin='round' d='m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0' />
                        </svg>
                     </button>
                  </form>
               </div>
               <p class='text-justify mt-8 leading-8'>
                  $messageBody
               </p>
            </div>";
         }
         ?>
      </div>
   </section>
</main>

<?php
include_once "../includes/footer.php";
?>