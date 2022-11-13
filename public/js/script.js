'use strict';

/**
 * scRoll to top btn when window scroll down to 100px
 */

 const backTopBtn = document.querySelector(".back-to-top");
 
 window.addEventListener("scroll", function () {
   if (window.scrollY >= 100) {
     backTopBtn.classList.add("active");
   } else {
     backTopBtn.classList.remove("active");
   }
   
 });


