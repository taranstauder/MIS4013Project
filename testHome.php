<!DOCTYPE html>
<html>
<head> <?php include("header.php");?>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
<br>
<br>

<div class="swiper">
  <div class="swiper-wrapper">
   <div class="swiper-slide">Slide 1</div>
   <div class="swiper-slide">Slide 2</div>
   <div class="swiper-slide">Slide 3</div>
    ...
  </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

 <div class="swiper-scrollbar"></div>
</div>

const swiper = new Swiper('.swiper', {
  direction: 'vertical',
  loop: true,
  
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
<?php include("footer.php");?>

</body>
</html>
