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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
    case 'Add':
      $sqlAdd = "insert into Movie (genre, title, year, summary) value (?)";
      $stmtAdd = $conn->prepare($sqlAdd);
      $stmtAdd->bind_param("s", $_POST['iName']);
      $stmtAdd->execute();
      echo '<div class="alert alert-success" role="alert">New movie added.</div>';
      break;
  }
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
    <td><?=$row["description"]?></td>
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
      <br />
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCustomer">
        Add New
      </button>

      <!-- Modal -->
      <div class="modal fade" id="addCustomer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addCustomerLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="addCustomerLabel">Add Customer</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="">
                <div class="mb-3">
                  <label for="customername" class="form-label">Name</label>
                  <input type="text" class="form-control" id="customerName" aria-describedby="nameHelp" name="iName">
                  <div id="nameHelp" class="form-text">Enter the customer's name.</div>
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
