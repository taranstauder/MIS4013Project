<!DOCTYPE html>
<html>
<head> <?php include("header.php");?></head>
<body>

<?php include("links.php");?>
<br>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Movie</th>
      <th>Starring Actor</th>
      <th>Director</th>
      <th>Review Description</th>
      <th>Review Rating</th>
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "localhost";
$username = "davyddov_davy0000";
$password = "mis4013project";
$dbname = "davyddov_mis4013project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT m.title, a.name, d.dirname, r.description, r.rating from Movie m join Cast c on m.movid=c.movid join Actor a on c.actid=a.actid join Director d on m.movid=d.movid join Review r on m.movid=r.movid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["title"]?></td>
    <td><?=$row["name"]?></td>
    <td><?=$row["dirname"]?></td>
    <td><?=$row["desctiption"]?></td>
    <td><?=$row["rating"]?></td>
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
