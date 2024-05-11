<?php
session_start();
include_once "./db/adminLogin.php";
if (isset($_POST["username"]) && !empty($_POST["username"])) {
   $result = adminLogin($_POST["username"], $_POST["password"]);
   if (isset($result)) {
      $_SESSION["adminFullName"] = $result["fullName"];
   }
}
?>

<?php
$title = "Admin";
include_once "../includes/navbar.php";
include_once "./includes/checkSession.php";

include_once "./db/blogsActions.php";
if (isset($_POST["blogSubject"]) && !empty($_POST["blogSubject"]))
{
   insertBlog($_POST["blogSubject"], $_POST["blogBody"], $_FILES["blogImg"], $_POST["blogCategory"], $_POST["blogColor"]);
}
if (isset($_POST["prevBlogSubject"]) && !empty($_POST["prevBlogSubject"]))
{
   if (!empty($_FILES["blogImg"]["tmp_name"])) {
      updateBlog($_POST["prevBlogSubject"], $_POST["blogSubject"], $_POST["blogBody"], $_POST["blogAuthor"], $_FILES["blogImg"], $_POST["blogCategory"], $_POST["blogDate"], $_POST["blogColor"]);
   } else {
      updateBlog($_POST["prevBlogSubject"], $_POST["blogSubject"], $_POST["blogBody"], $_POST["blogAuthor"], $_POST["blogImgName"], $_POST["blogCategory"], $_POST["blogDate"], $_POST["blogColor"]);
   }
}

include_once "./db/insertAdmin.php";
if (isset($_POST["newUsername"]) && !empty($_POST["newUsername"]))
{
   insertAdmin($_POST["newUsername"], $_POST["newPassword"], $_POST["newFullName"]);
}

include_once "./db/mainInfo.php";
if (isset($_POST["title"]) && !empty($_POST["title"]))
{
   updateMainInfo($_POST["title"], $_POST["subTitle"], $_FILES["image"], $_POST["link1"], $_POST["linkText1"], $_POST["link2"], $_POST["linkText2"]);
}

include_once "./db/aboutusInfo.php";
if (isset($_POST["siteTitle"]) && !empty($_POST["siteTitle"]))
{
   updateAboutusInfo($_POST["siteTitle"], $_POST["siteDescription"], $_POST["socialLink1"], $_POST["socialLinkText1"], $_POST["socialLink2"], $_POST["socialLinkText2"]);
}

include_once "./db/messagesActions.php";
if (isset($_POST["messageId"]) && !empty($_POST["messageId"])) {
   deleteMessage($_POST["messageId"]);
}
?>

<main>
   <section class='container flex flex-col items-center justify-center gap-8 min-h-screen-smaller'>
      <h1 class='text-5xl text-center'>
         سلام <?php echo $_SESSION["adminFullName"]; ?> ;)
      </h1>
      <h2 class='text-3xl'>
         به پنل مدیریت خوش اومدی! از طریق منوی بالا تغییرات خودت رو اعمال کن.
      </h2>
   </section>
</main>

<?php
include_once "../includes/footer.php";
?>