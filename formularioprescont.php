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
$id_ps = 1;
$ex1ps = "am working";
$ex2ps = "is doing";
$ex3ps = "are going";
$ex4ps = "is reading";
$ex5ps = "is studying";
$ex6ps = "are playing";
$ex7ps = "am drinking";
$ex8ps = "are flying";
$ex9ps = "are driving";
$ex10ps = "is raining";
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
<h2>Present Continous</h2>
<form action="" method="post">
<!-- pregunta 1 present continous: ex1ps -->    
<label>1. I __ __ (work) now</label>
<input type="text" name="ex1ps"/><br><br>

<!-- pregunta 2 present continous: ex2ps -->  
<label>2. He __ not __ (do) exercice.</label>
<input type="text" name="ex2ps"/><br><br>

<!-- pregunta 3 present continous: ex3ps -->  
<label>3. They __ __ (go) to the cinema</label>
<input type="text" name="ex3ps"/><br><br>

<!-- pregunta 4 present continous: ex4ps -->  
<label>4. John __ __ (read) the newspaper</label>
<input type="text" name="ex4ps"/><br><br>

<!-- pregunta 5 present continous: ex5ps -->  
<label>5. __ Ana __ (study) English?.</label>
<input type="text" name="ex5ps"/><br><br>

<!-- pregunta 6 present continous: ex6ps -->  
<label>6. We __ not __ (play) videogames.</label>
<input type="text" name="ex6ps"/><br><br>

<!-- pregunta 7 present continous: ex7ps -->  
<label>7. I __ not __ (drink) water.</label>
<input type="text" name="ex7ps"/><br><br>

<!-- pregunta 8 present continous: ex8ps -->  
<label>8. They __ __ (fly) to Paris</label>
<input type="text" name="ex8ps"/><br><br>

<!-- pregunta 9 present continous: ex9ps -->  
<label>9. You __ __ (drive) too fast.</label>
<input type="text" name="ex9ps"/><br><br>

<!-- pregunta 10 present continous: ex10ps -->  
<label>10. It __ __ (rain) right now.</label>
<input type="text" name="ex10ps"/><br><br>
<br><br>
<button class="btn btn-success" type="submit"  name="submit">Revisar</button><br/><br>
</form>
</div>
<div id="respuestas">
<?php
if(isset($_POST["submit"])){
    include 'conexion.php';
    if(($_POST["ex1ps"]) == $ex1ps){
        echo "<div class='titulo' style='color: green;'>La respuesta 1 es correcta</div>";
    } else{
        echo "<div class='titulo' style='color: red;'>La respuesta 1 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex2ps"]) == $ex2ps){
        echo "<div class='titulo' style='color: green;'>La respuesta 2 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 2 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex3ps"]) == $ex3ps){
        echo "<div class='titulo' style='color: green;'>La respuesta 3 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 3 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex4ps"]) == $ex4ps){
        echo "<div class='titulo' style='color: green;'>La respuesta 4 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 4 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex5ps"]) == $ex5ps){
        echo "<div class='titulo' style='color: green;'>La respuesta 5 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 5 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex6ps"]) == $ex6ps){
        echo "<div class='titulo' style='color: green;'>La respuesta 6 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 6 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex7ps"]) == $ex7ps){
        echo "<div class='titulo' style='color: green;'>La respuesta 7 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 7 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex8ps"]) == $ex8ps){
        echo "<div class='titulo' style='color: green;'>La respuesta 8 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 8 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex9ps"]) == $ex9ps){
        echo "<div class='titulo' style='color: green;'>La respuesta 9 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 9 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex10ps"]) == $ex10ps){
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