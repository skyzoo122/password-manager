const sideBtn = document.querySelector(".toggle");
const sideBar = document.querySelector("aside");
const colseIcon = document.querySelector(".close-toggle");
const openIcon = document.querySelector(".open-toggle");

sideBtn.addEventListener("click", () => {
  sideBar.classList.toggle("active-sidebar");
  colseIcon.classList.toggle("active-toggle");
  openIcon.classList.toggle("active-toggle");
});

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


var screenWidth = window.innerWidth;
if (screenWidth <= 576) {
  
}
// Check the screen size when the window is resized
// window.addEventListener("resize", function () {
//    = window.innerWidth;

//   // Check if the screen size is between 0 and 700 pixels

// });

window.onclick = (Event) => {
  const menu = document.querySelector(".profile-menu-drp");

  if (
    !Event.target.matches(".profile-btn") ||
    !Event.target.matches(".profile-img")
  ) {
    if (!menu.classList.contains("active-profile-menu")) {
      menu.classList.add("active-profile-menu");
    }
  }
};
