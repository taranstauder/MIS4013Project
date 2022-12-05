<?php
$mName = $_GET["movieTrailer"];
switch ($mName) {
    case "Avatar":
        echo <iframe width="560" height="315" src="https://www.youtube.com/embed/5PSNL1qE6VY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        break;
    case "Elf":
        break;
    case "Harry Potter and the Sorcerer's Stone":
        break;
    case "Smile":
        break;
    case "Titanic":
        break;
    case "Top Gun: Maverick":
        break;
    case "Wall E":
        echo "ur watching wall e";
        break;
}
?>
