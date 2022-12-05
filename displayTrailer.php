<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Trailer</title>
</head>
<body style="background-color: black; color:white;">
<?php include("header.php");?>
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
<table class="table" style="color:white;">
  <thead style="align-content: left; white-space: nowrap;">
    <tr>
      <th>Movie</th>
      <th>Star Actor</th>
      <th>Director</th>
      <th>Summary</th>
      <th>Average Rating</th>
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "159.89.47.44";
$username = "davyddov_davy0000";
$password = "mis4013project";
$dbname = "davyddov_mis4013project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT m.title, a.name, d.dirname, m.summary, ROUND(AVG(r.rating),1) as rating from Movie m join Cast c on m.movid=c.movid join Actor a on c.actid=a.actid join Director d on m.movid=d.movid join Review r on m.movid=r.movid group by m.title, a.name, d.dirname, m.summary"; 
  
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["title"] == $mName)
?>
  <tr>
    <td><?=$row["title"]?></td>
    <td style="white-space: nowrap;"><?=$row["name"]?></td>
    <td style="white-space: nowrap;"><?=$row["dirname"]?></td>
    <td><?=$row["summary"]?></td>
    <td style="text-align:center;"><?=$row["rating"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
    <?php include("footer.php");?>
</body>
</html>
