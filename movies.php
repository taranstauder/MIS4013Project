<!DOCTYPE html>
<html style="background-color: black; color: white;">
  <title>Movies</title>
<head> <?php include("header.php");?></head>
<body style="background-color: black; color:white;">
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

$sql = "SELECT m.movid, m.title, a.name, d.dirname, m.summary, ROUND(AVG(r.rating),1) as rating from Movie m join Cast c on m.movid=c.movid join Actor a on c.actid=a.actid join Director d on m.movid=d.movid join Review r on m.movid=r.movid group by m.movid, m.title, a.name, d.dirname, m.summary"; 
  
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["title"]?></td>
    <td style="white-space: nowrap;"><?=$row["name"]?></td>
    <td style="white-space: nowrap;"><?=$row["dirname"]?></td>
    <td><?=$row["summary"]?></td>
    <td style="text-align:center;"><a style="text-decoration:none;" href="movie_review.php?id=<?=$row["movid"]?>"><?=$row["rating"]?></td>
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
<?php 
 echo '<form method="POST" action="movieindex.php" style="text-align:center;">
    <input type="submit" value="Admin Login" style="font-family:helvetica; background: black; color:white;"/>
  </form>';
?>
    <?php include("footer.php");?>
</body>
</html>
