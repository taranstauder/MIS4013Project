<!DOCTYPE html>
<html style="background-color: black;">
  <title>Home</title>
<head> <?php include("header.php");?>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
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
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=5PSNL1qE6VY" target="_blank"><img src="https://m.media-amazon.com/images/M/MV5BNjA3NGExZDktNDlhZC00NjYyLTgwNmUtZWUzMDYwMTZjZWUyXkEyXkFqcGdeQXVyMTU1MDM3NDk0._V1_FMjpg_UX1000_.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=VyHV0BRtdxo" target="_blank"><img src="https://m.media-amazon.com/images/M/MV5BNmQ0ODBhMjUtNDRhOC00MGQzLTk5MTAtZDliODg5NmU5MjZhXkEyXkFqcGdeQXVyNDUyOTg3Njg@._V1_.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=CZ1CATNbXg0" target="_blank"><img src="https://m.media-amazon.com/images/M/MV5BMjExMTg5OTU0NF5BMl5BanBnXkFtZTcwMjMxMzMzMw@@._V1_.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=giXco2jaZ_4" target="_blank"><img src="https://m.media-amazon.com/images/M/MV5BZWYzOGEwNTgtNWU3NS00ZTQ0LWJkODUtMmVhMjIwMjA1ZmQwXkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=FC6biTjEyZw" target="_blank"><img src="https://static.wixstatic.com/media/f86f23_b88ab82f5782484181d473d0ae304dd5~mv2.jpg/v1/fill/w_408,h_614,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/the-notebook1.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=gBKx63Y6rG4" target="_blank"><img src="https://m.media-amazon.com/images/M/MV5BOTA5NjhiOTAtZWM0ZC00MWNhLThiMzEtZDFkOTk2OTU1ZDJkXkEyXkFqcGdeQXVyMTA4NDI1NTQx._V1_.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=kVrqfYjkTdQ" target="_blank"><img src="https://m.media-amazon.com/images/M/MV5BMDdmZGU3NDQtY2E5My00ZTliLWIzOTUtMTY4ZGI1YjdiNjk3XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=a54yC1etmVc" target="_blank"><img src="https://m.media-amazon.com/images/M/MV5BMzUxNzkzMzQtYjIxZC00NzU0LThkYTQtZjNhNTljMTA1MDA1L2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg"></a></div>
        <div class="swiper-slide"><a href="https://www.youtube.com/watch?v=BcDK7lkzzsU" target="_blank"><img src="https://m.media-amazon.com/images/M/MV5BZjE2ZWIwMWEtNGFlMy00ZjYzLWEzOWEtYzQ0MDAwZDRhYzNjXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_FMjpg_UX1000_.jpg"></a></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  <br>
  <div style="text-align:center;">
  <audio autoplay controls>
  <source src="https://www.televisiontunes.com/uploads/audio/21st%20Century%20Fox.mp3" type="audio/mp3">
</audio>
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
