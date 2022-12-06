<!DOCTYPE html>
<html style="background: black;">
  <title>Reviews</title>
<head> <?php include("header.php");?></head>
<body style="background-color: black;">
<table class="table" style="color:white;">
  <thead style="white-space: nowrap;">
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
    case 'Add':
      $sqlAdd = "insert into Review (movid, rating, description, rtitle) value (?,?, ?,?)";
      $stmtAdd = $conn->prepare($sqlAdd);
      $stmtAdd->bind_param("iiss",$_POST['movadd'],$_POST['rateadd'],$_POST['descadd'],$_POST['titleadd']);
      $stmtAdd->execute();
      echo '<div class="alert alert-success" role="alert">New review added.</div>';
      break;
    case 'Edit':
      $sqlEdit = "update Review set rtitle=?, description=?, rating=? where rtitle=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("ssis", $_POST['titleedit'], $_POST['descredit'],$_POST['ratedit'], $_POST['iid']);
      $stmtEdit->execute();
      echo '<div class="alert alert-success" role="alert">Review edited.</div>';
      break;
    case 'Delete':
      $sqlDelete = "delete from Review where rtitle=?";
      $stmtDelete = $conn->prepare($sqlDelete);
      $stmtDelete->bind_param("s", $_POST['iid']);
      $stmtDelete->execute();
      echo '<div class="alert alert-success" role="alert">Review deleted.</div>';
      break;
  }

}
     ?>

          
<?php
$sql = "SELECT title, rating, description, rtitle from Review r join Movie m on m.movid=r.movid order by title";
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
          
<?php
  }
} else {
  echo "0 results";
}
?>

          
        </tbody>
      </table>
      <br />
     
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addOrders" style="align-content:center;">
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
               <label for="ordersname" class="form-label">Enter the movie's rating (1-5)</label>
               <input type="text" class="form-control"  aria-describedby="nameHelp" name="rateadd" required><br>
              </div>
                 <input type="hidden" name="saveType" value="Add">
                 <button type="submit" class="btn btn-primary" style="text-align:center;">Submit</button>
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
