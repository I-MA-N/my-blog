function showHideActionMenu(actionMenuIndex) {
   const actionMenu = document.getElementById("actionMenu" + actionMenuIndex);
   if (actionMenu.classList.contains("hidden"))
      actionMenu.classList.remove("hidden");
   else
      actionMenu.classList.add("hidden");
}