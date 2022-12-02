<!DOCTYPE html>
<html style="background: black;">
  <title>Reviews</title>
<head> <?php include("header.php");?></head>
<body style="background-color: black;">
<table class="table table-striped">
  <thead>
    <tr>
      <th>Movie Title</th>
      <th>Review Title</th>
      <th>Description</th>
      <th>Rating</th>
      <th></th>
            <th></th>
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
      $sqlAdd = "insert into Review (movid, rating, description, rtitle) value (?,?, ?,?)";
      $stmtAdd = $conn->prepare($sqlAdd);
      $stmtAdd->bind_param("iiss",$_POST['movadd'],$_POST['rateadd'],$_POST['descadd'],$_POST['titleadd']);
      $stmtAdd->execute();
      echo '<div class="alert alert-success" role="alert">New review added.</div>';
      break;
  }

}
     ?>

          
<?php
$sql = "SELECT title, rating, description, rtitle from Review r join Movie m on m.movid=r.movid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>  
          
<?php
  }
} else {
  echo "0 results";
}
?>

          
        </tbody>
      </table>
      <br />
     
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addOrders">
        Add New
      </button>
     
      <!-- Modal -->
      <div class="modal fade" id="addOrders" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addOrdersLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="addOrdersLabel">Enter the review:</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <form method="post" action="">
                 <div class="mb-3">
                 <label for="movadd" class="form-label">Pick the movie</label>
                <select class="form-select" aria-label="Select Product" id="movadd" name="movadd">
                   <?php
                    $instructorSql = "select * from Movie order by title";
                    $instructorResult = $conn->query($instructorSql);
                    while($instructorRow = $instructorResult->fetch_assoc()) {
     
                   ?>
                    <option value="<?=$instructorRow['movid']?>"><?=$instructorRow['title']?></option>
                  <?php
                     }
                  ?>
                 </select>
               </div>
               <div class="mb-3">
               <label for="ordersname" class="form-label">Enter the review's title</label>
               <input type="text" class="form-control"  aria-describedby="nameHelp" name="titleadd" required><br>
              </div>
              <div class="mb-3">
               <label for="ordersname" class="form-label">Enter the review's description</label>
               <input type="text" class="form-control"  aria-describedby="nameHelp" name="descadd" required><br>
              </div>
               <div class="mb-3">
               <label for="ordersname" class="form-label">Enter the movie's rating</label>
               <input type="text" class="form-control"  aria-describedby="nameHelp" name="rateadd" required><br>
              </div>
                 <input type="hidden" name="saveType" value="Add">
                 <button type="submit" class="btn btn-primary">Submit</button>
           </form>
            </div>
          </div>
          </div>
          </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <?php include("footer.php");?>
  </body>
</html>
