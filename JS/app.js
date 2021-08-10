const modalGallery = document.querySelector(".modal-gallery");
const covers = document.querySelectorAll(".gallery img");
const original = document.querySelector(".full-img");

covers.forEach(cover => {
    cover.addEventListener("click", () => {
        modalGallery.classList.add("open");
        original.classList.add("open");
        //Dynamic change text and image
        const originalSrc = cover.getAttribute("data-original");
        console.log(originalSrc);
        original.src = `./Images/Menu/${originalSrc}`;
    });
});

modalGallery.addEventListener('click', (e) => {
    if (e.target.classList.contains('modal-gallery')) {
        modalGallery.classList.remove('open');
        original.classList.remove('open');
    }
});