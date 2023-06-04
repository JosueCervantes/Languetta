<?php
include('conexion.php');
$sql = "SELECT Id_us, Nombre, Apellido_p, Apellido_m, Email, Telefono, contrasena FROM usuario";
$result = $mysqli->query($sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Languetta Administrador</title>
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
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        <a class="nav-link " href="modificaradmin.php" >Modificar/Eliminar Usuarios</a>

                    </div>
                </div>
                <a href="logout.php"><button type="button" class="btn btn-dark">Cerrar Sesión</button></a>
            </div>
        </nav>
        <div class="row" style="margin-top: 7rem;">
            <h2>Lista de usuarios</h2>
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id_empleado</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Contraseña</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                      if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          
                      
                      ?>
                        <th scope="row"><?php echo $row['Id_us'];?></th>
                        <td><?php echo $row['Nombre'];?></td>
                        <td><?php echo $row['Apellido_p'];?></td>
                        <td><?php echo $row['Apellido_m'];?></td>
                        <td><?php echo $row['Email'];?></td>
                        <td><?php echo $row['Telefono'];?></td>
                        <td><?php echo $row['contrasena'];?></td>
                    </tr>
                    <?php
  }
} else {
  echo "0 results";
}
$mysqli->close();
?>
                </tbody>
            </table>
        </div>
    </div>

</body>


</html>