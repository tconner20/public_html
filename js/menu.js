let menu = document.querySelector("header nav");

document.getElementById("openmenu").addEventListener("click", () => {
  menu.style.display = "flex";
  document.body.style.overflow = "hidden";
});

document.getElementById("closemenu").addEventListener("click", () => {
  menu.style.display = "none";
  document.body.style.overflow = "auto";
});
