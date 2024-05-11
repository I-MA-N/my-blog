<?php
if (!isset($_SESSION["adminFullName"])) {
   echo "
   <main>
      <section class='container flex flex-col items-center justify-center gap-8 min-h-screen-smaller'>
         <h1 class='text-5xl text-center'>
            شما دسترسی به این صفحه را ندارید!
         </h1>
      </section>
   </main>";
   exit();
}
