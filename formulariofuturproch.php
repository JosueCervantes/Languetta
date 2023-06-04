<?php
// Initialize the session
session_start();
include('conexion.php');
$sql = "SELECT Id_us, Email, contrasena FROM usuario";
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
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Languetta-Get that languague</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.ico.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monserrat">


    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
#webform{
   
    margin-top:5rem;
    text-align: center;

}
#webform h2{

    margin-bottom: 5rem;


}
.titulo{
    text-align: center;
    font-family: Verdana;
    font-size:30px;
}

    </style>
</head>
<body>
<?php
require_once "conexion.php";
$id_fp = 1;
$ex1fp = "vais";
$ex2fp = "allons";
$ex3fp = "vas";
$ex4fp = "partir";
$ex5fp = "allez";
$ex6fp = "vont";
$ex7fp = "vais";
$ex8fp = "allons";
$ex9fp = "va";
$ex10fp = "va";
?>
    <!-- ======= Header ======= -->
    <header id="header" class="header-scrolled" style="background-color: rgba(24, 6, 185, 0.8);">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.php"><img src="assets/img/favicon.ico.png" alt="Logotipo languetta" style="margin: 10px;" width="5%" class="img-fluid">Languetta</a></h1>
            <a href="logout.php"><button type="button" class="btn btn-dark">Cerrar Sesión</button></a>
        </div>
    </header>
    <!-- End Header -->
    <div id="webform">
<h2>Futur Proche</h2>
<form action="" method="post">
<!-- pregunta 1 futur proche: ex1fp -->    
<label>1. Je __ acheter une voiture</label>
<input type="text" name="ex1fp"/><br><br>

<!-- pregunta 2 futur proche: ex2fp -->  
<label>2. Nous __ passer un bon week-end.</label>
<input type="text" name="ex2fp"/><br><br>

<!-- pregunta 3 futur proche: ex3fp -->  
<label>3. Tu __ dormir chez moi?</label>
<input type="text" name="ex3fp"/><br><br>

<!-- pregunta 4 futur proche: ex4fp -->  
<label>4. Le train __ partir</label>
<input type="text" name="ex4fp"/><br><br>

<!-- pregunta 5 futur proche: ex5fp -->  
<label>5. Vous __ perdre du temps.</label>
<input type="text" name="ex5fp"/><br><br>

<!-- pregunta 6 futur proche: ex6fp -->  
<label>6. Tes amies __ attendre</label>
<input type="text" name="ex6fp"/><br><br>

<!-- pregunta 7 futur proche: ex7fp -->  
<label>7. Je __ arriver tard</label>
<input type="text" name="ex7fp"/><br><br>

<!-- pregunta 8 futur proche: ex8fp -->  
<label>8. Nous __ manger un bite</label>
<input type="text" name="ex8fp"/><br><br>

<!-- pregunta 9 futur proche: ex9fp -->  
<label>9. Elle __ danser ce soir.</label>
<input type="text" name="ex9fp"/><br><br>

<!-- pregunta 10 futur proche: ex10fp -->  
<label>10. Il __ gagner le concour.</label>
<input type="text" name="ex10fp"/><br><br>
<br><br>
<button class="btn btn-success" type="submit"  name="submit">Revisar</button><br/><br>
</form>
</div>
<div id="respuestas">
<?php
if(isset($_POST["submit"])){
    include 'conexion.php';
    if(($_POST["ex1fp"]) == $ex1fp){
        echo "<div class='titulo' style='color: green;'>La respuesta 1 es correcta</div>";
    } else{
        echo "<div class='titulo' style='color: red;'>La respuesta 1 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex2fp"]) == $ex2fp){
        echo "<div class='titulo' style='color: green;'>La respuesta 2 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 2 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex3fp"]) == $ex3fp){
        echo "<div class='titulo' style='color: green;'>La respuesta 3 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 3 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex4fp"]) == $ex4fp){
        echo "<div class='titulo' style='color: green;'>La respuesta 4 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 4 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex5fp"]) == $ex5fp){
        echo "<div class='titulo' style='color: green;'>La respuesta 5 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 5 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex6fp"]) == $ex6fp){
        echo "<div class='titulo' style='color: green;'>La respuesta 6 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 6 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex7fp"]) == $ex7fp){
        echo "<div class='titulo' style='color: green;'>La respuesta 7 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 7 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex8fp"]) == $ex8fp){
        echo "<div class='titulo' style='color: green;'>La respuesta 8 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 8 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex9fp"]) == $ex9fp){
        echo "<div class='titulo' style='color: green;'>La respuesta 9 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 9 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex10fp"]) == $ex10fp){
        echo "<div class='titulo' style='color: green;'>La respuesta 10 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 10 es incorrecta</div>";
    }
}
?>
</div>
</div>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright-wrap d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Languetta</span></strong>. Todos los derechos reservados.
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>
</html>