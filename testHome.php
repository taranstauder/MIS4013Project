<!DOCTYPE html>
<html>
<head> <?php include("header.php");?>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
      <style>
      html,
      body {
        position: relative;
        height: 100%;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        height: auto;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
      }

      .swiper .swiper-slide {
        height: 300px;
        line-height: 300px;
      }

      .swiper .swiper-slide:nth-child(2n) {
        height: 500px;
        line-height: 500px;
      }
    </style>
</head>
<body>
<br>
<br>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="https://static.toiimg.com/photo/msid-5348868/5348868.jpg?26276"></div>
        <div class="swiper-slide"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7f/Smile_%282022_film%29.jpg/220px-Smile_%282022_film%29.jpg"></div>
        <div class="swiper-slide"><img src="https://m.media-amazon.com/images/M/MV5BMjNiMDA0OWQtZGY1MC00N2EwLTkxNDYtYmVkNTk1NzJiZjFmXkEyXkFqcGdeQXVyMTQyMTMwOTk0._V1_.jpg"></div>
        <div class="swiper-slide"><img src="https://static.wikia.nocookie.net/jurassicpark/images/c/ce/JP-MoviePoster.jpg/revision/latest?cb=20220215213506"></div>
        <div class="swiper-slide"><img src="https://static.wikia.nocookie.net/starwars/images/5/53/SWTLJExpandedEdition.jpg/revision/latest?cb=20180212223228"></div>
        <div class="swiper-slide"><img src="https://c8.alamy.com/comp/PXNB80/titanic-original-movie-poster-PXNB80.jpg"></div>
        <div class="swiper-slide"><img src="https://c8.alamy.com/comp/E5MCMW/elf-will-ferrell-2003-c-new-linecourtesy-everett-collection-E5MCMW.jpg"></div>
        <div class="swiper-slide"><img src="https://upload.wikimedia.org/wikipedia/en/8/8c/Indiana_Jones_and_the_Last_Crusade.png"></div>
        <div class="swiper-slide"><img src="https://m.media-amazon.com/images/M/MV5BYzI0N2M4ZDItY2VmOS00OGVhLWI2NmUtOGU0NWM3MGZkM2Y3XkEyXkFqcGdeQXVyMDc2NTEzMw@@._V1_.jpg"></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
<?php include("footer.php");?>

</body>
</html>
