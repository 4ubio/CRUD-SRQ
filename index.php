<?php include('db.php'); ?>
<?php include('includes/header.php'); ?>

    <main class="container p-4">
        <div class="row">
            <div class="col-md-4">

                <?php if(isset ($_SESSION['message'])) {?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?=$_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!--mensaje de alerta con bootstrap-->
                <?php session_unset(); } ?>
                <!--cierra el mesaje de alerta al refrescar la página-->

                <div class="card card-body">
                    <form action="save.php" method="POST">
                        <div class="form-group">

                            <p>
                                <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                            </p>
                            <p>
                                <input type="text" name="brand" class="form-control" placeholder="Brand" autofocus>
                            </p>
                            <p>
                                <input type="text" name="price" class="form-control" placeholder="Price" autofocus>
                            </p>
                            <p>
                                <input type="text" name="colorway" class="form-control" placeholder="Colorway" autofocus>
                            </p>
                            <p>
                                <input type="text" name="collab" class="form-control" placeholder="Collaboration" autofocus>
                            </p>
                            <p>
                                <input type="text" name="year" class="form-control" placeholder="Year" autofocus>
                            </p>

                        </div>

                        <input type="submit" class="btn btn-success btn block" name='save' value="Save">
                    </form>
                </div>
            </div>

            <div class="col-md-8">
                <table class="table table-border">

                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th>Colorway</th>
                            <th>Collaboration</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    $query = "SELECT *  FROM sneakers";
                    $result_sneaker = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result_sneaker)){
                    ?> <!--recorro mi tabla usuario-->

                        <tr>
                            <td>
                                <?php echo $row['name']; ?>
                            </td>
                            <td>
                                <?php echo $row['brand']; ?>
                            </td>
                            <td>
                                <?php echo $row['price']; ?>
                            </td>
                            <td>
                                <?php echo $row['colorway']; ?>
                            </td>
                            <td>
                                <?php echo $row['collab']; ?>
                            </td>
                            <td>
                                <?php echo $row['year']; ?>
                            </td>
                            <td><a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                            </td>
                        </tr>
                            
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

<?php include('includes/footer.php'); ?>