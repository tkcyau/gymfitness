jQuery(document).ready(function ($) {
  $("#menu-main-navigation").slicknav({ label: "" });

  // Run the bxSlider library on testimonials
  $(".testimonials-list").bxSlider({
    controls: false,
    mode: "fade",
  });

  // When page is ready add fixed menu if position is greater than 300px
  const headerScroll = document.querySelector(".navigation-bar");
  const rect = headerScroll.getBoundingClientRect();
  const topDistance = Math.abs(rect.top);
  fixedMenu(topDistance);
});

window.onscroll = () => {
  const scroll = window.scrollY;
  fixedMenu(scroll);
};

// Adds a fixed menu on top

function fixedMenu(scroll) {
  const headerScroll = document.querySelector(".navigation-bar");

  // In the case the scroll is greater than 300 add classes
  if (scroll > 300) {
    headerScroll.classList.add("fixed-top");
  } else {
    headerScroll.classList.remove("fixed-top");
  }
}
