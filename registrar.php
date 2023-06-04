<?php
include('conexion.php');
?>
<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ejercicios.php");
    exit;
}
// Include config file
require_once "conexion.php";
// Close connection
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Languetta</title>


    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- =======================================================
    * Template Name: Techie - v4.7.0
    * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header-scrolled">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.php">Languetta</a></h1>
        </div>
    </header>
    <!-- End Header -->

    <section>
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="assets/img/Logo_Final_Neon_Blanco.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post" action="">
                        <div class="text-center">
                            <p class="lead fw-normal mb-0 me-3 fs-1">Bienvenido</p>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Registrate</p>
                        </div>

                        <!-- Nombre input -->
                        <div class="form-outline mb-4">
                            <input name="Nombre" type="text" id="name" class="form-control form-control-lg" placeholder="Tu nombre" />
                            <label class="form-label" for="name"></label>
                        </div>

                        <!-- Apellido paterno input -->
                        <div class="form-outline mb-3">
                            <input name="Apellido_p" type="text" id="ape_p" class="form-control form-control-lg" placeholder="Tu apellido paterno" />
                            <label class="form-label" for="ape_p"></label>
                        </div>

                        <!-- Apellido materno input -->
                        <div class="form-outline mb-3">
                            <input name="Apellido_m" type="text" id="ape_m" class="form-control form-control-lg" placeholder="Tu apellido materno" />
                            <label class="form-label" for="ape_m"></label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-3">
                            <input name="Email" type="email" id="email" class="form-control form-control-lg" placeholder="Tu correo electrónico" />
                            <label class="form-label" for="email"></label>
                        </div>

                        <!-- Contraseña input -->
                        <div class="form-outline mb-3">
                            <input name="contrasena" type="text" id="contra" class="form-control form-control-lg" placeholder="Ingresa una contraseña de 8 carácteres" />
                            <label class="form-label" for="contra"></label>
                        </div>

                        <!-- Telefono input -->
                        <div class="form-outline mb-3">
                            <input name="Telefono" type="text" id="tel" class="form-control form-control-lg" placeholder="Tu numero telefonico" />
                            <label class="form-label" for="tel"></label>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" name="submit" class="btn btn-dark btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; background-color: black; text-align: center;">Registrate</button>
                        </div>
                    </form>
                </div>
                <?php
                        if(isset($_POST["submit"])){
                            include 'conexion.php';
                            $sql = "INSERT INTO usuario
                            VALUES ('','".$_POST["Nombre"]."','".$_POST["Apellido_p"]."','".$_POST["Apellido_m"]."','".$_POST["Email"]."','".$_POST["Telefono"]."','".$_POST["contrasena"]."')";
                            if ($mysqli->query($sql) === TRUE) {          
                                ('Location: index.php');
                                } 
                            else 
                                {
                                    echo 
                                    "<script type= 'text/javascript'>
                                        alert('Error: " . $sql . "<br>" . $mysqli->error."');
                                    </script>";
                                }
                        $mysqli->close();
                        }
                    ?>
            </div>
        </div><br>
    </section>
        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="container">

                <div class="copyright-wrap d-md-flex py-4">
                    <div class="me-md-auto text-center text-md-start">
                        <div class="copyright">
                            &copy; Copyright <strong><span>Languetta</span></strong>. Todos los derechos reservados
                        </div>
                    </div>
                    <div class="social-links text-center text-md-right pt-3 pt-md-0">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </footer>
        <!-- End Footer -->
</body>

</html>