<?php
include('conexion.php');
$id=$_GET['Id'];
$sql="DELETE FROM usuario WHERE Id_us=$id";
if ($mysqli->query($sql) === TRUE) {
    header('Location: admin.php');

    }
    else {
        echo "Error: " .$sql . "<br>" . $mysqli->error;
    } 
$mysqli->close();    
?>