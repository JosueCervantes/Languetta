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
$id_passe = 1;
$ex1pc = "suis";
$ex2pc = "est";
$ex3pc = "avez";
$ex4pc = "ont";
$ex5pc = "a";
$ex6pc = "as";
$ex7pc = "est";
$ex8pc = "sont";
$ex9pc = "ont";
$ex10pc = "êtes";
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
<h2>Passe Composse</h2>
<form action="" method="post">
<!-- pregunta 1 passe composse: ex1pc -->    
<label>1. Je ___ allé à la mairie ce matin.</label>
<input type="text" name="ex1pc"/><br><br>

<!-- pregunta 2 passe composse: ex2pc -->  
<label>2. Il s'___ bien comporté devant le juge.</label>
<input type="text" name="ex2pc"/><br><br>

<!-- pregunta 3 passe composse: ex3pc -->  
<label>3. Vous ___ jeté les papiers à la poubelle ?</label>
<input type="text" name="ex3pc"/><br><br>

<!-- pregunta 4 passe composse: ex4pc -->  
<label>4. Les enfants ___ rangé leurs chambres.</label>
<input type="text" name="ex4pc"/><br><br>

<!-- pregunta 5 passe composse: ex5pc -->  
<label>5. Elle n'___ pas retournée le voir.</label>
<input type="text" name="ex5pc"/><br><br>

<!-- pregunta 6 passe composse: ex6pc -->  
<label>6. Tu _____ retrouvé tes clés ?</label>
<input type="text" name="ex6pc"/><br><br>

<!-- pregunta 7 passe composse: ex7pc -->  
<label>7. Laura s'_____ perdu dans Paris..</label>
<input type="text" name="ex7pc"/><br><br>

<!-- pregunta 8 passe composse: ex8pc -->  
<label>8. Ils se _____ lavés les pieds avant de rentrer.</label>
<input type="text" name="ex8pc"/><br><br>

<!-- pregunta 9 passe composse: ex8pc -->  
<label>9. Les chèvres _____ monté tout en haut de la montagne</label>
<input type="text" name="ex9pc"/><br><br>

<!-- pregunta 10 passe composse: ex10pc -->  
<label>10. Vous _____ chosí, Monsieur le Président?</label>
<input type="text" name="ex10pc"/><br><br>
<br><br>
<button class="btn btn-success" type="submit"  name="submit">Revisar</button><br/><br>
</form>
</div>
<div id="respuestas">
<?php
if(isset($_POST["submit"])){
    include 'conexion.php';
    if(($_POST["ex1pc"]) == $ex1pc){
        echo "<div class='titulo' style='color: green;'>La respuesta 1 es correcta</div>";
    } else{
        echo "<div class='titulo' style='color: red;'>La respuesta 1 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex2pc"]) == $ex2pc){
        echo "<div class='titulo' style='color: green;'>La respuesta 2 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 2 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex3pc"]) == $ex3pc){
        echo "<div class='titulo' style='color: green;'>La respuesta 3 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 3 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex4pc"]) == $ex4pc){
        echo "<div class='titulo' style='color: green;'>La respuesta 4 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 4 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex5pc"]) == $ex5pc){
        echo "<div class='titulo' style='color: green;'>La respuesta 5 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 5 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex6pc"]) == $ex6pc){
        echo "<div class='titulo' style='color: green;'>La respuesta 6 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 6 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex7pc"]) == $ex7pc){
        echo "<div class='titulo' style='color: green;'>La respuesta 7 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 7 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex8pc"]) == $ex8pc){
        echo "<div class='titulo' style='color: green;'>La respuesta 8 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 8 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex9pc"]) == $ex9pc){
        echo "<div class='titulo' style='color: green;'>La respuesta 9 es correcta</div>";
        } else{
            echo "<div class='titulo' style='color: red;'>La respuesta 9 es incorrecta</div>";
    }
}
?>
<br>
<?php
if(isset($_POST["submit"])){
    if(($_POST["ex10pc"]) == $ex10pc){
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
