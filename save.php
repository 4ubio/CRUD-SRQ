<?php 
include("db.php");

if(isset($_POST['save'])) { //si existe save, guardar en cada variable los datos ingresados por el usuario
    $name=$_POST['name'];  //guardo cada dato ingredado
    $brand=$_POST['brand'];
    $price=$_POST['price']; 
    $colorway=$_POST['colorway'];
    $collab=$_POST['collab'];
    $year=$_POST['year'];

    $query="INSERT INTO sneakers(name, brand, price, colorway, collab, year) VALUES ('$name', '$brand', '$price', '$colorway', '$collab', '$year')"; //guardo cada variable en la tabla usuario de mi base de datos
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail");
    }
    
    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>