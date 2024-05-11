<?php
$divClassName = "flex justify-center items-center mb-8";
if (isset($sectionText)) {
   $divClassName = "flex justify-between items-center mb-8";
}
?>

<div class="<?php echo $divClassName; ?>">
   <div class="flex items-center gap-4">
      <span class="inline-block w-6 h-6 bg-white" style="clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></span>
      <h3 class="text-3xl font-bold"><?php echo $sectionTitle; ?></h3>
   </div>

   <?php
   if (isset($sectionText)) {
      echo "<span>
         $sectionText
      </span>";
   }
   ?>
</div>