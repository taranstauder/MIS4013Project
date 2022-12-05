<?php
$mName = $_GET["movieTrailer"];
switch ($mName) {
    case "Avatar":
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/5PSNL1qE6VY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        break;
    case "Elf":
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/gW9wRNqQ_P8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        break;
    case "Harry Potter and the Sorcerer's Stone":
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/VyHV0BRtdxo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        break;
    case "Smile":
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/BcDK7lkzzsU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        break;
    case "Titanic":
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/CHekzSiZjrY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        break;
    case "Top Gun: Maverick":
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/giXco2jaZ_4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        break;
    case "Wall E":
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/CZ1CATNbXg0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        break;
}
?>
