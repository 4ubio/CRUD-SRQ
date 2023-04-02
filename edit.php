<?php
include("db.php");
$name = '';
$brand= '';
$price = '';
$colorway= '';
$collab = '';
$year = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM sneakers WHERE id=$id";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $brand = $row['brand'];
    $price = $row['price'];
    $colorway = $row['colorway'];
    $collab = $row['collab'];
    $year = $row['year'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $name=$_POST['name'];
  $brand=$_POST['brand'];
  $price=$_POST['price']; 
  $colorway=$_POST['colorway'];
  $collab=$_POST['collab'];
  $year=$_POST['year'];
  $query = "UPDATE sneakers set name = '$name', brand = '$brand', price = '$price', colorway = '$colorway', collab= '$collab', year= '$year' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}
?>

<?php include('includes/header.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
          <div class="form-group">

            <p>
                <input type="text" name="name" class="form-control" placeholder="Name" autofocus value="<?php echo $name;?>">
            </p>
            <p>
                <input type="text" name="brand" class="form-control" placeholder="Brand" autofocus value="<?php echo $brand;?>">
            </p>
            <p>
                <input type="text" name="price" class="form-control" placeholder="Price" autofocus value="<?php echo $price;?>">
            </p>
            <p>
                <input type="text" name="colorway" class="form-control" placeholder="Colorway" autofocus value="<?php echo $colorway;?>">
            </p>
            <p>
                <input type="text" name="collab" class="form-control" placeholder="Collaboration" autofocus value="<?php echo $collab;?>">
            </p>
            <p>
                <input type="text" name="year" class="form-control" placeholder="Year" autofocus value="<?php echo $year;?>">
            </p>

          </div>

          <button class="btn-success" name="update"> Update </button>
          
        </form>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>