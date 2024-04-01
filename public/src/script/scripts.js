const sidebar = document.querySelector(".sidebar");
const closeBtn = document.querySelector("#btn");
const searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", toggleSidebar);
document.addEventListener("keydown", handleKeyDown);
document.addEventListener("click", handleClickOutside);

function toggleSidebar() {
  sidebar.classList.toggle("open");
  menuBtnChange();
}

function menuBtnChange() {
  if (sidebar.classList.contains("open")) {
    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
  } else {
    closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
  }
}

function handleKeyDown(event) {
  console.log("Key pressed:", event.key);
  if (event.key === "Escape" && sidebar.classList.contains("open")) {
    toggleSidebar();
  }
}



function handleClickOutside(event) {
  if (!sidebar.contains(event.target) && sidebar.classList.contains("open")) {
    toggleSidebar();
  }
}


