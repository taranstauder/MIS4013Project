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

<div class="swiper mySwiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="https://static5.depositphotos.com/1007168/472/i/600/depositphotos_4725473-stock-photo-hot-summer-sun-wearing-shades.jpg"></div>
	<div class="swiper-slide"><img src="https://i.stack.imgur.com/cdCSj.jpg"></div>
  </div>
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>	
<script>	  
     var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script> 
  
<?php include("footer.php");?>

</body>
</html>
