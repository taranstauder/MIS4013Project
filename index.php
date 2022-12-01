<!DOCTYPE html>
<html style="background-color: black;">
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

      .swiper {
        width: auto;
        height: auto;
        background-color: black;
      }
      .img {
        height: 600px;
        width: 400px;
        }

      .swiper-slide {
        height: 600px;
        width: 400px;
      }
    </style>
</head>
<body>


    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="https://static.toiimg.com/photo/msid-5348868/5348868.jpg?26276"></div>
        <div class="swiper-slide"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7f/Smile_%282022_film%29.jpg/220px-Smile_%282022_film%29.jpg"></div>
        <div class="swiper-slide"><img src="https://m.media-amazon.com/images/M/MV5BMjNiMDA0OWQtZGY1MC00N2EwLTkxNDYtYmVkNTk1NzJiZjFmXkEyXkFqcGdeQXVyMTQyMTMwOTk0._V1_.jpg"></div>
        <div class="swiper-slide"><img src="https://static.wixstatic.com/media/f86f23_b88ab82f5782484181d473d0ae304dd5~mv2.jpg/v1/fill/w_408,h_614,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/the-notebook1.jpg"></div>
        <div class="swiper-slide"><img src="https://c8.alamy.com/comp/B3KR2H/star-wars-poster-for-the-1977-tcflucasfilm-film-B3KR2H.jpg"></div>
        <div class="swiper-slide"><img src="https://c8.alamy.com/comp/PXNB80/titanic-original-movie-poster-PXNB80.jpg"></div>
        <div class="swiper-slide"><img src="https://c8.alamy.com/comp/E5MCMW/elf-will-ferrell-2003-c-new-linecourtesy-everett-collection-E5MCMW.jpg"></div>
        <div class="swiper-slide"><img src="https://m.media-amazon.com/images/I/51iA8isg59L._AC_SY580_.jpg"></div>
        <div class="swiper-slide"><img src="https://thumbs.dreamstime.com/b/harry-potter-warner-brothers-studio-tour-london-uk-entrance-where-filmed-actual-film-series-movie-poster-sorcerers-164168768.jpg"></div>
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
          delay: 3500,
          disableOnInteraction: false,
        },
        slidesPerView: 3,
        watchSlidesProgress: true,
        spaceBetween: 30,
        //slidesPerGroup: 3,
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
