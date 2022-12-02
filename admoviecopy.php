<!DOCTYPE html>
<html>
<head> <?php include("header.php");?></head>
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
<body>
<br>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Genre</th>
      <th>Title</th>
      <th>Year</th>
      <th>Summary</th>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
    case 'Add':
      $sqlAdd = "insert into Movie (genre, title, year, summary) values (?, ?, ?, ?)";
      $stmtAdd = $conn->prepare($sqlAdd);
      $stmtAdd->bind_param("ssis", $_POST['genre'],$_POST['title'],$_POST['year'],$_POST['summary']);
      $stmtAdd->execute();
      echo '<div class="alert alert-success" role="alert">New movie added.</div>';
      break;
  }
}

$sql = "SELECT genre, title, year, summary from Movie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["genre"]?></td>
    <td><?=$row["title"]?></td>
    <td><?=$row["year"]?></td>
    <td><?=$row["summary"]?></td>
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
      <br />
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMovie">
        Add New
      </button>

      <!-- Modal -->
      <div class="modal fade" id="addMovie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addMovieLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="addMovieLabel">Add a Movie</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="">
                <div class="mb-3">
                  <label for="moviename" class="form-label">Enter the genre</label>
                  <input type="text" class="form-control" id="moviename" aria-describedby="nameHelp" name="genre">
                </div>
                <div class="mb-3">
               <label for="title" class="form-label">Enter the title</label>
               <input type="text" class="form-control" id="title" aria-describedby="nameHelp" name="title" required>
                </div>
                <div class="mb-3">
               <label for="year" class="form-label">Enter the Year</label>
               <input type="text" class="form-control" id="year" aria-describedby="nameHelp" name="year" required>
              </div>
                <div class="mb-3">
               <label for="summary" class="form-label">Enter the Summary</label>
               <input type="text" class="form-control" id="summary" aria-describedby="nameHelp" name="summary" required>
              </div>
                <input type="hidden" name="saveType" value="Add">
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <?php include("footer.php");?>
  </body>
</html>
