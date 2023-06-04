<?php
include('conexion.php');
$id=$_GET['Id'];
$sql="SELECT * FROM usuario WHERE Id_us=$id";
$result=mysqli_query($mysqli,$sql) or die(mysqli_error());
$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Actualizar Usuario</title>
    <style>
#webform{
   
    margin-top:5rem;
    text-align: center;

}
#webform h2{

    margin-bottom: 5rem;


}

    </style>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LANGUETTA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link " aria-current="page" href="admin.php">Inicio</a>
                        <a class="nav-link active" href="modificaradmin.php" aria-disabled="true">Modificar empleados</a>

                    </div>
                </div>
                <a href="logout.php"><button type="button" class="btn btn-dark">Cerrar Sesión</button></a>
            </div>
        </nav>
        <div id="webform" >
        <h1 class="my-5"><b></b>. Bienvenido Admin.</h1>

<h2>Formulario de Actualizacion</h2>
<form action="updateadmin.php" method="POST">
<label>Id_usuario :</label>
<input type="text" name="Id_us" disable value="<?php echo $row['Id_us'];?>"/><br><br>
<label>Nombre :</label>
<input type="text" name="Nombre" value="<?php echo $row['Nombre'];?>"/><br><br>
<label>Apellido paterno :</label>
<input type="text" name="Apellido_p" value="<?php echo $row['Apellido_p'];?>"/><br><br>
<label>Apellido materno:</label>
<input type="text" name="Apellido_m"value="<?php echo $row['Apellido_m'];?>"/><br><br>
<label>Email :</label>
<input type="email" name="Email" value="<?php echo $row['Email'];?>"/><br><br>
<label>Telefono:</label>
<input type="text" name="Telefono" value="<?php echo $row['Telefono'];?>"/><br><br>
<label>Contraseña:</label>
<input type="text" name="contrasena" value="<?php echo $row['contrasena'];?>"/><br><br>
<br><br>
<button class="btn btn-success" type="submit"  name="submit">Actualizar empleado</button><br/>
</form>
</div>
    
</body>
</html>