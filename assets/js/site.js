// import * as basicLightbox from "/assets/js/vendor/basicLightbox.min.js";

for (const lightbox of document.querySelectorAll(".lightbox")) {
  lightbox.onclick = () => {
    basicLightbox.create(lightbox.innerHTML).show();
  };
}
