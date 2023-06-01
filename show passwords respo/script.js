const sideBtn = document.querySelector(".toggle");
const sideBar = document.querySelector("aside");
const colseIcon = document.querySelector(".close-toggle");
const openIcon = document.querySelector(".open-toggle");
let open = false;

function categoToggle() {
  const catego = document.querySelector(".liste-catego-drp");
  catego.classList.toggle("active-categories");
}
function folderToggle() {
  const catego = document.querySelector(".liste-folder-drp");
  catego.classList.toggle("active-categories");
}
function menuToggle() {
  const Menu = document.querySelector(".profile-menu-drp");
  Menu.classList.toggle("active-profile-menu");
}

document.addEventListener("click", (e) => {
  if (sideBtn.contains(e.target)) {
    sideBar.classList.toggle("active-sidebar");
    colseIcon.classList.toggle("active-toggle");
    openIcon.classList.toggle("active-toggle");
  } else if (!sideBar.contains(e.target)) {
    sideBar.classList.remove("active-sidebar");
    colseIcon.classList.add("active-toggle");
    openIcon.classList.remove("active-toggle");
  }
});
