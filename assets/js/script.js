


const hamburger_menu = document.querySelector(".hamburger-menu");
const container = document.querySelector(".container");

hamburger_menu.addEventListener("click", () => {
  container.classList.toggle("active");
});


// ==============================
let login = document.getElementById("facebook");
login.onclick = function(){
  window.location.href = "form.php";
}