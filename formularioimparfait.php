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
$id_imp = 1;
$ex1imp = "habitais";
$ex2imp = "jouions";
$ex3imp = "finissais";
$ex4imp = "rendait";
$ex5imp = "alliez";
$ex6imp = "voyageaient";
$ex7imp = "connaissais";
$ex8imp = "prenait";
$ex9imp = "lisaient";
$ex10imp = "avais";
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
<h2>Imparfait</h2>
<form action="" method="post">
<!-- pregunta 1 imparfait: ex1imp -->    
<label>1. En 2010 J'(habiter)__ à Touluse</label>
<input type="text" name="ex1imp"/><br><br>

<!-- pregunta 2 imparfait: ex2imp -->  
<label>2. Pendant notre enfance, nous(jouer)__ au tennis.</label>
<input type="text" name="ex2imp"/><br><br>

<!-- pregunta 3 imparfait: ex3imp -->  
<label>3. Est-ce que tu(finir)__ toujours à 20 h?</label>
<input type="text" name="ex3imp"/><br><br>

<!-- pregunta 4 imparfait: ex4imp -->  
<label>4. Tous les jours, elle lui (rendre)__ visite</label>
<input type="text" name="ex4imp"/><br><br>

<!-- pregunta 5 imparfait: ex5imp -->  
<label>5. Vous (aller)__ souvent au cinéma.</label>
<input type="text" name="ex5imp"/><br><br>

<!-- pregunta 6 imparfait: ex6imp -->  
<label>6. Avant ils (voyager)__ beaucoup</label>
<input type="text" name="ex6imp"/><br><br>

<!-- pregunta 7 imparfait: ex7imp -->  
<label>7. Est-ce que tu (connaître)__ ce chanteur?</label>
<input type="text" name="ex7imp"/><br><br>

<!-- pregunta 8 imparfait: ex8imp -->  
<label>8. Elle (prendre)__ le bus tous les jours</label>
<input type="text" name="ex8imp"/><br><br>

<!-- pregunta 9 imparfait: ex9imp -->  
<label>9. Ils (lire)__ tous les matins les journaux.</label>
<input type="text" name="ex9imp"/><br><br>

<!-- pregunta 10 imparfait: ex10imp -->  
<label>10. En 2010 j'(avoir)__ 7 ans.</label>
<input type="text" name="ex10imp"/><br><br>
<br><br>
<button class="btn btn-success" type="submit"  name="submit">Revisar</button><br/><br>
</form>
</div>
<div id="respuestas">
<?php
if(isset($_POST["submit"])){
    include 'conexion.php';
    if(($_POST["ex1imp"]) == $ex1imp){
        echo "<div class='titulo' style='color: green;'>La respuesta 1 es correcta</div>";
    } else{
        echo "<div class='titulo' style='color: red;'>La respuesta 1 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex2imp"]) == $ex2imp){
        echo "<div class='titulo' style='color: green;'>La respuesta 2 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 2 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex3imp"]) == $ex3imp){
        echo "<div class='titulo' style='color: green;'>La respuesta 3 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 3 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex4imp"]) == $ex4imp){
        echo "<div class='titulo' style='color: green;'>La respuesta 4 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 4 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex5imp"]) == $ex5imp){
        echo "<div class='titulo' style='color: green;'>La respuesta 5 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 5 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex6imp"]) == $ex6imp){
        echo "<div class='titulo' style='color: green;'>La respuesta 6 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 6 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex7imp"]) == $ex7imp){
        echo "<div class='titulo' style='color: green;'>La respuesta 7 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 7 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex8imp"]) == $ex8imp){
        echo "<div class='titulo' style='color: green;'>La respuesta 8 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 8 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex9imp"]) == $ex9imp){
        echo "<div class='titulo' style='color: green;'>La respuesta 9 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 9 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex10imp"]) == $ex10imp){
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