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
