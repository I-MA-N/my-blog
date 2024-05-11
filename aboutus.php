<?php
$title = "About us";
include_once './includes/navbar.php';
include_once './includes/header.php';

include_once './admin/db/aboutusInfo.php';
$info = getAboutusInfo();
?>

<main>
   <section class="container my-16">
      <?php
      $sectionTitle = "درباره ما";
      include_once './includes/title.php';
      ?>

      <div class="flex items-center divide-x-reverse divide-x-2 divide-zinc-500">
         <div class="p-10">
            <h5 class="text-3xl mb-4">سلام، من سید محمد ایمان مصطفوی نژاد :</h5>
            <p class="text-lg/8 text-justify">
               برنامه نویس این وبسایت، در حال تحصیل در رشته کامپیوتر 17 ساله از اصفهان، علاقه به یادگیری و کسب تجربه در بازار کار.
            </p>

            <span class="inline-block w-full h-0.5 bg-zinc-500 my-10"></span>

            <h4 class="text-3xl mb-4 font-OpenSans"><?php echo $info["siteTitle"]; ?></h4>
            <p class="text-lg/8 text-justify">
               <?php echo $info["siteDescription"]; ?>
               <a href="<?php echo $info["socialLink1"]; ?>" class="inline-block border-r-2 pr-2 hover:pr-4 text-base transition-all duration-200 mx-4">
                  <?php echo $info["socialLinkText1"]; ?>
               </a>
               <a href="<?php echo $info["socialLink2"]; ?>" class="inline-block border-r-2 pr-2 hover:pr-4 text-base transition-all duration-200">
                  <?php echo $info["socialLinkText2"]; ?>
               </a>
            </p>
         </div>

         <div class="w-2/6 pr-10">
            <img src="./src/images/logo.jpg" class="w-full rounded-full" alt="logo-img">
         </div>
      </div>
   </section>
</main>

<?php
include_once './includes/footer.php';
?>