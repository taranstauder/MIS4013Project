<!DOCTYPE html>
<html style="background-color: black; color: white;">
  <title>Movie Reviews</title>
<head> <?php include("header.php");?></head>
<body style="background-color: black; color:white;">
<table class="table" style="color:white;">
  <thead style="align-content: left; white-space: nowrap;">
    <tr>
      <th>Movie</th>
      <th>Review Title</th>
      <th>Description</th>
      <th>Rating</th>
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
$iid = $_GET['id'];
$sql = "SELECT title, rating, description, rtitle from Review r join Movie m on m.movid=r.movid where r.movid=" . $iid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
            <td><?=$row["title"]?></td>
            <td><?=$row["rtitle"]?></td>
            <td><?=$row["description"]?></td>
            <td style="text-align:center;"><?=$row["rating"]?></td>
          </tr>
    <br>
    <a href="movies.php" class="btn btn-primary">Return to All Movies</a>
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
