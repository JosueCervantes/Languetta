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
    <meta charset="utf-8">
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

    </style>
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header-scrolled" style="background-color: rgba(24, 6, 185, 0.8);">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.php"><img src="assets/img/favicon.ico.png" alt="Logotipo languetta" style="margin: 10px;" width="5%" class="img-fluid">Languetta</a></h1>
            <a href="logout.php"><button type="button" class="btn btn-dark">Cerrar Sesión</button></a>
        </div>
    </header>
    <!-- End Header -->
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <div class="col-lg-7 d-flex align-items-stretch">
            <div class="content">
              <h3>Estructura</h3>
              <ul>
              <li><i class="bi bi-check-circle"></i> Subject + verb to be + verb + -ing.</li>
              <li><i class="bi bi-check-circle"></i> Subject + verb to be + not + verb + -ing.</li>
              <li><i class="bi bi-check-circle"></i> Verb to be + subject + verb + -ing.</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-7 d-flex align-items-stretch">
            <div class="content">
              <h3>Ejemplos</h3>
              <ul>
              <li><i class="bi bi-check-circle"></i> You are eating pizza.</li>
              <li><i class="bi bi-check-circle"></i> They are studying a lot these days.</li>
              <li><i class="bi bi-check-circle"></i> We are eating dinner this night with Martha.</li>
              </ul>
              <div class="text-center">
                <a href="formularioprescont.php" class="more-btn"><button type="button" class="btn btn-warning">Hacer ejercicio<i class="bx bx-chevron-right"></i></button></a>
              </div>
            </div>
          </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Present Continous.</h3>
            <p class="fst-italic">
              Existen 5 usos principales
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Describir acciones que se realizan en el momento.</li>
              <li><i class="bi bi-check-circle"></i> Para dar contextos. Se pueden utilizar adverbios para explicar mejor ( currently, these days, etc.) .</li>
              <li><i class="bi bi-check-circle"></i> Contar hechos que sucederán en el futuro (que son seguros y próximos).</li>
              <li><i class="bi bi-check-circle"></i> Comentar sucesos temporales. </li>
              <li><i class="bi bi-check-circle"></i> Describir sucesos que son frecuentes. Se acompañan de adverbios ( always, forever, constantly, etc.) .</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
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