window.addEventListener("scroll", function (event) {
  var scroll = this.scrollY;
  console.log(scroll);

  var nav1 = document.querySelector(".first");
  var nav2 = document.querySelector(".second");
  var nav3 = document.querySelector(".third");

  if (scroll < 520) {
    if (!nav1.classList.add("activeL")) {
      nav1.classList.add("activeL");
    }
    if (nav2.classList.contains("activeL")) {
      nav2.classList.remove("activeL");
    }
  } else if (scroll >= 520 && scroll <= 1540) {
    nav1.classList.remove("activeL");
    nav2.classList.add("activeL");

    if (nav3.classList.contains("activeL")) {
      nav3.classList.remove("activeL");
    }
  } else {
    nav2.classList.remove("activeL");
    nav3.classList.add("activeL");
  }
});

//0<520 home
//520<1540 about
