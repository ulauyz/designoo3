const goTopBtn = document.querySelector(".scroll__up");

goTopBtn.addEventListener("click", goTop);
window.addEventListener("scroll", trackScroll);
function trackScroll() {
   const offset = window.pageYOffset;
   const coords = document.documentElement.clientHeight;
   if (offset > coords) {
      goTopBtn.classList.add("scroll__up--show");

   } else {
      goTopBtn.classList.remove("scroll__up--show");
   }
}
function goTop() {
   if (window.pageYOffset > 0) {
      window.scrollBy(0, -80);
      setTimeout(goTop, 0);
   }
}


