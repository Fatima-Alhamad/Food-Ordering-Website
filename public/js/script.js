function toggleMenu(menu) {
  let list = document.getElementById("list");

  if (menu.name === "menu") {
    menu.name = "close";
    list.classList.add("top-[80px]");
    list.classList.add("opacity-100");
  } else {
    menu.name = "menu";
    list.classList.remove("top-[-400px]");
    list.classList.remove("opacity-100");
  }
}

function toggleRegisterOverlay() {
  const overlay = document.getElementById("registerOverlay");
  overlay.classList.toggle("active");
}

// Add form submission handling
document
  .getElementById("registerForm")
  .addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent the default form submission
    toggleRegisterOverlay();
    this.submit(); // This submits the form programmatically
  });
