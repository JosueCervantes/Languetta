<?php
include('conexion.php');
$id=$_POST['Id_us'];
$name=$_POST['Nombre'];
$Ape_p=$_POST['Apellido_p'];
$Ape_m=$_POST['Apellido_m'];
$email=$_POST['Email'];
$telefono=$_POST['Telefono'];
$contrasena=$_POST['contrasena'];
$sql="UPDATE usuario SET Nombre ='".$name."',Apellido_p='".$Ape_p."',Apellido_m='".$Ape_m."',Email='".$email."',Telefono='".$telefono."',contrasena='".$contrasena."' WHERE Id_us=$id";
$result=mysqli_query($mysqli,$sql) or die(mysqli_error());
header("Location:admin.php");
?>