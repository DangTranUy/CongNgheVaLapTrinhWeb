function menuButton() {
  var menuMain = document.querySelector("#id-menu-main");

  if (menuMain.style.display === "none") {
    menuMain.style.display = "block";
  } else {
    menuMain.style.display = "none";
  }
}

function searchButton() {
  var search = document.querySelector("#id-search");

  if (search.style.display === "none") {
    search.style.display = "block";
  } else {
    search.style.display = "none";
  }
}

function toggleDescription() {
  var description = document.getElementById("product-description");
  var arrow = document.querySelector(".arrow");

  if (description.classList.contains("collapsed")) {
    description.classList.remove("collapsed");
    arrow.classList.add("active");
  } else {
    description.classList.add("collapsed");
    arrow.classList.remove("active");
  }
}
function addToCart() {
  var cartNotification = document.getElementById("cart-notification");
  cartNotification.style.display = "block";

  setTimeout(function () {
    cartNotification.style.display = "none";
    overlay.remove();
  }, 1000);
}




