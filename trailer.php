<!DOCTYPE html>
<html style="background: black;">
  <link rel="stylesheet" href=trailer.css>
  <title>Trailers
    </title>
    <?php include("header.php");?>
</head>
<body style="background-color:black;">
    <form action="displayTrailer.php" id="trailerForm" method="get">
        <select name="movieTrailer" id="movieTrailer" form="trailerForm">
          <option value="none" style="text-align: center;">Select a Movie</option>
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

$sql = "SELECT m.title, a.name, d.dirname, m.summary, ROUND(AVG(r.rating),2) as rating from Movie m join Cast c on m.movid=c.movid join Actor a on c.actid=a.actid join Director d on m.movid=d.movid join Review r on m.movid=r.movid group by m.title, a.name, d.dirname, m.summary"; 
  
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
            <option value="<?php echo $row['title']; ?>"> 
              <div><?php echo $row['title']; ?></div>
          </option>
    <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
                                                        

             </select>
        <input type="submit" value="Watch the trailer!">                                              
    </form>                                          
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<?php include("footer.php");?>
</body>

</html>
