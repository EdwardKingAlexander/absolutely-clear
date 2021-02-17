<div class="gallery flex-grow relative mx-auto " x-data="gallery()" x-init="init()">
  <div class="gallery__item sm:rounded-lg overflow-hidden">
    <img src="assets/img/nik-b.webp" alt="First picture of Nik cleaning windows" class="gallery__image object-cover object-center" title="First sLide of Nik cleaning windows">
  </div>
  <div class="gallery__item gallery__item--hidden sm:rounded-lg overflow-hidden">
    <img src="assets/img/nik2.webp" alt="Second picture of Nik cleaning windows" class="gallery__image object-cover object-center" title="Second slide of Nik cleaning windows">
  </div>
  <div class="gallery__item gallery__item--hidden sm:rounded-lg overflow-hidden">
    <img src="assets/img/nik3.webp" alt="Third picture of Nik cleaning windows" class="gallery__image object-cover object-center" title="Third slide of Nik cleaning windows">
  </div>
  <div class="gallery__item gallery__item--hidden sm:rounded-lg overflow-hidden">
    <img src="assets/img/nik4.webp" alt="Fourth picture of Nik cleaning windows" class="gallery__image object-cover object-center" title="Fourth slide of Nik cleaning windows">
  </div>

  <a class="gallery__nav gallery__nav--right text-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer" x-on:click="next()">
    <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
      <path
        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
      </path>
    </svg>
  </a>
  <a class="gallery__nav gallery__nav--left text-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer" x-on:click="previous()">
    <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
      <path
        d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z">
      </path>
    </svg>
  </a>
</div>