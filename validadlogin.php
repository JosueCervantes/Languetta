<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="languetta";
$conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
    die("No hay conexion:".mysqli_connect_error());
}
$nombre=$_POST["username"];
$pass=$_POST["password"];
$query=mysqli_query($conn,"SELECT*FROM usuario WHERE Email='".$nombre."'and contrasena='".$pass."'");
$nr=mysqli_num_rows($query);
if($nr == 1)
{
    if($nombre=="axel@languetta.com" || $nombre=="josue@languetta.com" || $nombre=="tobias@languetta.com"){
        header("Location:admin.php");
    }
    else{
        header("Location:elegiridioma.php");
    }
}
else if($nr == 0)
{
    header("Location:login.php");
    echo "<div class='error' style='color: red;'>Usuario o Contraseña Incorrecta</div>";
}
?>