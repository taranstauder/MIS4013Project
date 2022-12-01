https://cdn.jsdelivr.net/npm/@glidejs/glide

<!DOCTYPE html>
<html>
<head> <?php include("header.php");?>
  <link
  rel="stylesheet"
  href="node_modules/@glidejs/glide/dist/css/glide.core.min.css"
/>
<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
</head>
<body>

<script>
  new Glide('.glide').mount()
</script>

<div class="glide">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
      <li class="glide__slide">0</li>
      <li class="glide__slide">1</li>
      <li class="glide__slide">2</li>
    </ul>
  </div>
    <div class="glide__arrows" data-glide-el="controls">
    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
  </div>
</div>
  
<?php include("footer.php");?>

</body>
</html>
