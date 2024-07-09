let navLinks = document.getElementsByClassName("nav-links");
let openButton = document.getElementById("nav-open");
let isOpen = false;

function open() {
  if (isOpen) {
    isOpen = false;
    navLinks[0].classList.add("open");
  } else {
    isOpen = true;
    navLinks[0].classList.remove("open");
  }
}

openButton.addEventListener("click", () => {
  open();
});
