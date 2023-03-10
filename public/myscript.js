let carousel = document.querySelector('#carouselExampleControls');
let carouselItems = carousel.querySelectorAll('.carousel-item');
let activeItem = carousel.querySelector('.carousel-item.active');

activeItem.style.opacity = 1;

carousel.addEventListener('slide.bs.carousel', function (e) {
  // на след слайд
  let nextItem = e.relatedTarget;
  nextItem.style.opacity = 0;
});

carousel.addEventListener('slid.bs.carousel', function (e) {
  // на активный слайд
  let activeItem = e.relatedTarget;
  activeItem.style.opacity = 1;
});