<!DOCTYPE html>
<html style="background-color: black;">
  <title>Home</title>
<head> <?php include("header.php");?>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="css/audioplayer.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
</script>
    <style>
      html,
      .swiper {
        width: auto;
        height: auto;
        background: black;
      }
      .swiper-slide {
        height: auto;
        background: black;
      }
      .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
    </style>
</head>
<body style="background-color: black;">

<script src="js/audioplayer.js"></script>
$(function() {
  $('audio').audioPlayer();
});

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=5PSNL1qE6VY" target="_blank"><img src="https://m.media-amazon.com/images/M/MV5BNjA3NGExZDktNDlhZC00NjYyLTgwNmUtZWUzMDYwMTZjZWUyXkEyXkFqcGdeQXVyMTU1MDM3NDk0._V1_FMjpg_UX1000_.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=BcDK7lkzzsU" target="_blank"><img src="https://i.ebayimg.com/thumbs/images/g/AkMAAOSwjjhi8Hn5/s-l1600.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=giXco2jaZ_4" target="_blank"><img src="https://m.media-amazon.com/images/M/MV5BMjNiMDA0OWQtZGY1MC00N2EwLTkxNDYtYmVkNTk1NzJiZjFmXkEyXkFqcGdeQXVyMTQyMTMwOTk0._V1_.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=FC6biTjEyZw" target="_blank"><img src="https://static.wixstatic.com/media/f86f23_b88ab82f5782484181d473d0ae304dd5~mv2.jpg/v1/fill/w_408,h_614,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/the-notebook1.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=gBKx63Y6rG4" target="_blank"><img src="https://c8.alamy.com/comp/B3KR2H/star-wars-poster-for-the-1977-tcflucasfilm-film-B3KR2H.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=kVrqfYjkTdQ" target="_blank"><img src="https://c8.alamy.com/comp/PXNB80/titanic-original-movie-poster-PXNB80.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=a54yC1etmVc" target="_blank"><img src="https://c8.alamy.com/comp/E5MCMW/elf-will-ferrell-2003-c-new-linecourtesy-everett-collection-E5MCMW.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=CZ1CATNbXg0" target="_blank"><img src="https://m.media-amazon.com/images/I/51iA8isg59L._AC_SY580_.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=VyHV0BRtdxo" target="_blank"><img src="https://thumbs.dreamstime.com/b/harry-potter-warner-brothers-studio-tour-london-uk-entrance-where-filmed-actual-film-series-movie-poster-sorcerers-164168768.jpg"></a></div>
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
</body>
  <?php include("footer.php");?>
</html>
