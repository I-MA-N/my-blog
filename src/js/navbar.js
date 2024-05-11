const showMenuBtn = document.getElementById("showMenuBtn");
showMenuBtn.addEventListener("click", showMenu);

const hideMenuBtn = document.getElementById("hideMenuBtn");
hideMenuBtn.addEventListener("click", hideMenu);

const menuOverlay = document.getElementById("menuOverlay");
menuOverlay.addEventListener("click", hideMenu);

function showMenu() {
   const menu = document.getElementById("menu");
   menu.classList.add("right-0");
   menu.classList.remove("-right-full");
   menuOverlay.classList.remove("hidden");
}

function hideMenu() {
   const menu = document.getElementById("menu");
   menu.classList.remove("right-0");
   menu.classList.add("-right-full");
   menuOverlay.classList.add("hidden");
}