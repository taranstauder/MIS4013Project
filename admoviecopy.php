<!DOCTYPE html>
<html style="background-color: black;">
<head> <?php include("header.php");?></head>
<body style="background-color: black;">
<table class="table" style="color: white;">
  <thead>
    <tr>
      <th>Title</th>
      <th>Genre</th>
      <th>Year</th>
      <th>Summary</th>
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
    case 'Edit':
      $sqlEdit = "update Movie set genre=?, title=?, year=?, summary=? where movid=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("ssisi", $_POST['genreedit'],$_POST['titleedit'],$_POST['yearedit'],$_POST['summaryedit'], $_POST['iid']);
      $stmtEdit->execute();
      echo '<div class="alert alert-success" role="alert">Movie edited.</div>';
      break;
    case 'Delete':
      $sqlDelete = "delete from Movie where movid=?";
      $stmtDelete = $conn->prepare($sqlDelete);
      $stmtDelete->bind_param("i", $_POST['iid']);
      $stmtDelete->execute();
      echo '<div class="alert alert-success" role="alert">Movie deleted.</div>';
      break;
  }
}
         ?>

<?php
$sql = "SELECT movid,genre, title, year, summary from Movie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
<div style="color:white;">
  <tr>
    <td><?=$row["title"]?></td>
    <td><?=$row["genre"]?></td>
    <td><?=$row["year"]?></td>
    <td><?=$row["summary"]?></td>
    <td>
<button type="button" style="color: white;" class="btn" data-bs-toggle="modal" data-bs-target="#editOrders<?=$row["movid"]?>">
                Edit
              </button>
              <div class="modal fade" id="editOrders<?=$row["movid"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editOrders<?=$row["movid"]?>Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" style="color:black" id="editMovieLabel">Edit a Movie</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="">
                        <div class="mb-3">
                          <label for="editOrders<?=$row["movid"]?>Name" class="form-label">Movie Genre</label>
                          <input type="text" class="form-control" id="editOrders<?=$row["movid"]?>Name" aria-describedby="editOrders<?=$row["genre"]?>Help" name="genreedit" value="<?=$row['genre']?>">
                        </div>
                        <div class="mb-3">
                          <label for="editOrders<?=$row["movid"]?>Name" class="form-label">Movie Title</label>
                          <input type="text" class="form-control" id="editOrders<?=$row["movid"]?>Name" aria-describedby="editOrders<?=$row["title"]?>Help" name="titleedit" value="<?=$row['title']?>">
                        </div>
                        <div class="mb-3">
                          <label for="editOrders<?=$row["movid"]?>Name" class="form-label">Movie Year</label>
                          <input type="text" class="form-control" id="editOrders<?=$row["movid"]?>Name" aria-describedby="editOrders<?=$row["year"]?>Help" name="yearedit" value="<?=$row['year']?>">
                        </div>
                          <div class="mb-3">
                          <label for="editOrders<?=$row["movid"]?>Name" class="form-label">Movie Summary</label>
                          <input type="text" class="form-control" id="editOrders<?=$row["movid"]?>Name" aria-describedby="editOrders<?=$row["summary"]?>Help" name="summaryedit" value="<?=$row['summary']?>">
                        </div>
                        <input type="hidden" name="iid" value="<?=$row['movid']?>">
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
                <input type="hidden" name="iid" value="<?=$row["movid"]?>" />
                <input type="hidden" name="saveType" value="Delete">
                <input type="submit" class="btn" style="color:white;" onclick="return confirm('Are you sure?')" value="Delete">
              </form>
            </td>
          </tr>
    </div>

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
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <?php include("footer.php");?>
  </body>
</html>
