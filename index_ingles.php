<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
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
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-scrolled">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index_ingles.php"><img src="assets/img/favicon.ico.png" alt="Logotipo languetta" style="margin: 10px;" width="10%" class="img-fluid">Languetta</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php/#about">About Us</a></li>
                    <li><a class="nav-link scrollto" href="index.php/#services">Language Selection</a></li>
                    <li><a class="nav-link scrollto" href="index.php/#team">Our Team</a></li>
                    <li><a class="nav-link scrollto" href="index.php/#contact">Help</a></li>
                    <li><a class="nav-link" href="login.php">Login</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Translate Page
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item español" href="index.php">Español</a></li>
                                <li><a class="dropdown-item inglés" href="index_ingles.php">English</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle" style="color: white;"></i>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>The best way to learn languages is with Languetta</h1>
                    <h2>Concise lessons and practical exercises by students for students</h2>
                    <div><a href="login.php" class="btn-get-started scrollto">Start to learn !</a></div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 order-1 order-lg-2 hero-img aos-init aos-animate justify-content-center" data-aos="zoom-in" data-aos-delay="150">
                    <img src="assets/img/Rocket Final.png" class="img-fluid animated" alt="Rocket image">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

    <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                        <img src="assets/img/Red Book Pop Animation Gif.gif" style="border-radius:2.5%" class="img-fluid" alt="Book animation">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3>Languetta is aimed towards students with an interest and/or need to reinforce a language</h3>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Study English and French.</li>
                            <li><i class="bi bi-check-circle"></i> Find various topics.</li>
                            <li><i class="bi bi-check-circle"></i> Carry out quick, practical and dynamic exercises</li>
                            <li><i class="bi bi-check-circle"></i> Obtain the best performance in your language study by understanding the topics and reviewing them.</li>
                            <li><i class="bi bi-check-circle"></i> Boost your learning, reinforce your motivation and work on your perseverance.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Languages</h2>
                    <p>Select one of our available languages to begin your journey</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box" style="border-radius:2.5%;">
                            <img src="assets/img/Big Ben Gif.gif" style="width:80%; border-radius:2.5%" class="img-fluid" alt="">
                            <h4>English</h4>
                            <p>If you want to reinforce this language or study some topics and practice them, please click here</p><br>
                            <a href="ejercicios.php"><button type="button" class="btn btn-primary text-white">Let's go</button></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box" style="border-radius:2.5%;">
                            <img src="assets/img/Torre Eiffel Gif.gif" style="width:80%; border-radius:2.5%" class="img-fluid" alt="">
                            <h4><a href="">French</a></h4>
                            <p>If you want to reinforce this language or study some topics and practice them, please click here</p><br>
                            <a href="ejerciciosfr.php"><button type="button" class="btn btn-danger text-white">Let's go</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--==========End services section=============-->

    <!--==========Team section=============-->
        <section id="team" class="team">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="section-title">
                    <h2>The Languetta team</h2>
                    <p>Meet the makers behind languetta</p>
                </div>
                <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="assets/img/team/teamJose.jpeg" class="img-fluid" style="border-radius:2.5%;" alt="Imagen José Tobías">
                            <div class="member-content">
                                <h4>José Tobías</h4>
                                <span>Front end development and creative lead </span>
                                <p>
                                    JoseTob@languetta.com
                                </p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="assets/img/team/teamAxel.jpeg" style="border-radius:2.5%;" class="img-fluid" alt="Imagen Axel Castrezana">
                            <div class="member-content">
                                <h4>Axel Castrezana</h4>
                                <span>Marketing and lead designer</span>
                                <p>
                                    AxelCast@languetta.com
                                </p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="assets/img/team/teamJosue.jpeg" style="border-radius:2.5%;" class="img-fluid" alt="Imagen Axel Castrezana">
                            <div class="member-content">
                                <h4>Josué Carvantes</h4>
                                <span>Back end development and product design </span>
                                <p>
                                    JosueCerv@languetta.com
                                </p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!--==========End of team section=============-->

    <!--==========Contact=============-->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Help</h2>
                    <p>If you have any doubts, clarifications or comments you can contact the developers</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4" style="border-radius:2.5%">
                            <i class="bx bx-map"></i>
                            <h3>Our Addres</h3>
                            <p>Av, Montes Americanos, Sector 35, 31216 Chihuahua, Chih.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4" style="border-radius:2.5%">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <p>languetta.contacto@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4" style="border-radius:2.5%">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call us</h3>
                            <p>+52 614 317 86 06</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q=utch&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px; border-radius:2.5%" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="150">
                        <img src="assets/img/Red Book Pop Animation Gif.gif" style="border-radius:2.5%" class="img-fluid" alt="Book animation">
                    </div>
                </div>
            </div>
        </section>

    <!-- End Contact Section -->
    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright-wrap d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Languetta</span></strong>. All rights reserved.
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="https://twitter.com/Languetta1" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="https://www.facebook.com/Languetta-102899665865313" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/languetta.contacto/" class="instagram"><i class="bx bxl-instagram"></i></a>
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