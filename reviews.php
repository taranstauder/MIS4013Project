<!DOCTYPE html>
<html>
<head> <?php include("header.php");?></head>
<body>

<br>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Movie Title</th>
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
      $sqlAdd = "insert into Review (movid, rating, description, rtitle) value (?, ?, ?,?)";
      $stmtAdd = $conn->prepare($sqlAdd);
      $stmtAdd->bind_param("iiss", $_POST['iName'],$_POST['ordersname'],$_POST['cname'],$_POST['cname']);
      $stmtAdd->execute();
      echo '<div class="alert alert-success" role="alert">New review added.</div>';
      break;
    case 'Edit':
      $sqlEdit = "update Review set rating=? where revid=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("ii", $_POST['iName'], $_POST['iid']);
      $stmtEdit->execute();
      echo '<div class="alert alert-success" role="alert">Review edited.</div>';
      break;
    case 'Delete':
      $sqlDelete = "delete from Review where revid=?";
      $stmtDelete = $conn->prepare($sqlDelete);
      $stmtDelete->bind_param("i", $_POST['iid']);
      $stmtDelete->execute();
      echo '<div class="alert alert-success" role="alert">review deleted.</div>';
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
          <tr>
            <td><?=$row["title"]?></td>
            <td><?=$row["rtitle"]?></td>
            <td><?=$row["description"]?></td>
            <td><?=$row["rating"]?></td>
            <td>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editOrders<?=$row["title"]?>">
                Edit
              </button>
              <div class="modal fade" id="editOrders<?=$row["title"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editOrders<?=$row["title"]?>Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="editOrders<?=$row["title"]?>Label">Edit Review</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="">
                        <div class="mb-3">
                          <label for="editOrders<?=$row["title"]?>Name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="editOrders<?=$row["title"]?>Name" aria-describedby="editOrders<?=$row["title"]?>Help" name="iName" value="<?=$row['rtitle']?>">
                          <div id="editOrders<?=$row["title"]?>Help" class="form-text">Enter the quantity.</div>
                        </div>
                        <input type="hidden" name="iid" value="<?=$row['title']?>">
                       <input type="hidden" name="saveType" value="Edit">
                        <input type="submit" class="btn btn-primary" value="Submit">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>
             <form method="post" action="">
                <input type="hidden" name="iid" value="<?=$row["title"]?>" />
                <input type="hidden" name="saveType" value="Delete">
                <input type="submit" class="btn" onclick="return confirm('Are you sure?')" value="Delete">
              </form>
            </td>
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
     
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addOrders">
        Add New
      </button>
     
      <!-- Modal -->
      <div class="modal fade" id="addOrders" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addOrdersLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="addOrdersLabel">Enter the reviews's title:</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <form method="post" action="">
              <div class="mb-3">
               <label for="ordersname" class="form-label">Enter the review's description</label>
               <input type="text" class="form-control"  aria-describedby="nameHelp" name="iName" required><br>
              </div>
               <div class="mb-3">
               <label for="ordersname" class="form-label">Enter the movie's rating</label>
               <input type="text" class="form-control"  aria-describedby="nameHelp" name="iName" required><br>
              </div>
              <div class="mb-3">
                 <label for="ordersname" class="form-label">Pick the movie</label>
                <select class="form-select" aria-label="Select Product" id="ordersname" name="ordersname">
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
