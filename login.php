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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Languetta-Inicia sesión</title>


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
                <div class="col-sm-7 col-md-7 col-lg-6 col-xl-5">
                    <img src="assets/img/Logo_Final_Neon_Blanco.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <div class="text-center">
                    <p class="lead fw-normal mb-0 me-3 fs-1">Bienvenido</p>
                </div>
                    <div class="divider d-flex align-items-center my-4">
                        <p class="fw-bold ">Inicia sesión</p>
                    </div>
                     
                    <form action="validadlogin.php" method="post">

                        <!-- Username input -->
                        <div class="form-outline mb-4 form-group">
                        <label>Email</label>
                        <input type="text" name="username" class="form-control" value="">
                        <span class="invalid-feedback"></span>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3 form-group">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control">
                        <span class="invalid-feedback"></span>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2 form-group">
                            <button type="submit" class="form-group btn btn-dark btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; background-color: black;" value="login">Entrar</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes una cuenta aún? <a href="registrar.php" style="color:blue;">Registrarte en Langueta</a></p>
                        </div>
                    </form>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                </div>
            </div>
        </div>
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