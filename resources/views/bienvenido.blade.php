<!doctype html>
<html lang="en">
<head>
    <title>Casa del Migrante</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="flex-row justify-content-center align-items-center">
                    <span class="text-md-left" style="color: #e0a800; font-family: 'Arial Black'">Casa del Migrante</span>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="#home-section" class="nav-link">Inicio</a></li>
                            <li><a href="#about-section" class="nav-link">Acerca de</a></li>
                            <li><a href="#services-section" class="nav-link">Servicios</a></li>
                            <li><a href="#blog-section" class="nav-link">Galeria</a></li>
                            <li><a href="#contact-section" class="nav-link">Contáctanos</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>
    </header>

    <div class="site-blocks-cover overlay" style="background-image: url(images/niña.jpg);" data-aos="fade" id="home-section">

        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-md-8 mt-lg-5 text-center">
                    <h1 class="text-uppercase" data-aos="fade-up" style="font-size: 90px; font-family: cursive">BIENVENIDOS</h1>
                    <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100"><b style="color: #e0a800; font-size: 25px; font-family: cursive"><strong>Fundación Alivio del Sufrimiento</strong></b></p>
                    <div data-aos="fade-up" data-aos-delay="100">
                        <a href="{{route('index.index')}}" class="btn smoothscroll btn-primary mr-2 mb-2">Acceder</a>
                    </div>
                </div>

            </div>
        </div>

        <a href="#about-section" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
        </a>
    </div>


    <div class="site-section cta-big-image" id="about-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                    <figure class="circle-bg">
                        <img src="images/Logo.jpg" alt="Image" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-4">
                        <h2 class= "section-title mb-3"><b>Sobre Nosotros</b></h2>
                        <p>El principal problema que el proyecto propuesto quiere abordar es la necesidad de
                            un modelo integral que atienda las necesidades de seguridad y acceso a formación
                            de calidad para reincorporarse al sistema educativo o mercado laboral. No existen
                            espacios equipados, seguros y con actividades adecuadas para la inclusión socioeconómica
                            de jóvenes que regresan o están en riesgo de migración irregular.</p>
                    </div>

                    <div class="mb-3">
                        <ul class="list-unstyled ul-check success">
                            <p><b>Beneficios:</b></p>
                            <li>Educación de calidad</li>
                            <li>Espacios de trabajo conjunto,</li>
                            <li>Aprendizaje compartido y formación laboral</li>
                            <li>Entre otros...</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="site-section border-bottom bg-light" id="services-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title mb-3">Nuestros Servicios</h2>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                    <div class="unit-4">
                        <img src="images/comida-y-bebida (1).svg" class="svg" width="60">
                        <div>
                            <h3>Alimentación gratuita</h3>
                            <p>La alimentación es un elemento importante en la buena salud, influye la calidad de
                                los alimentos, la cantidad de comida y los hábitos alimentarios para un bienestar
                                del ser humano, con lo cual se obtiene una nutrición equilibrada</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="unit-4">
                        <img src="images/kit-de-primeros-auxilios.svg" class="svg" width="50">
                        <div>
                            <h3>Atención médica</h3>
                            <p>La buena atención médica es el tipo de medicina que practican y enseñan los líderes
                                reconocidos de la profesión médica en un cierto periodo del desarrollo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4">
                        <img src="images/ropa-limpia.svg" class="svg" width="50">
                        <div>
                            <h3>Vestuario</h3>
                            <p>Conjunto de prendas de vestir para los niños, niñas y jóvenes</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                    <div class="unit-4">
                        <img src="images/casa.svg" class="svg" width="50">
                        <div>
                            <h3>Alojamiento</h3>
                            <p>Garantizar el alojamiento de los migrantes y sus familias. Sector de la población
                                al que va dirigido el servicio: Población inmigrante.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="unit-4">
                        <img src="images/llamada-telefonica.svg" class="svg" width="50">
                        <div>
                            <h3>Llamada telefónica</h3>
                            <p>Una llamada telefónica es la operación en la que se comunican generalmente 2 personas,
                                aunque pueden ser varias personas, a ambos extremos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4">
                        <img src="images/psicologia.svg" class="svg" width="50">
                        <div>
                            <h3>Atención psicológica</h3>
                            <p>Como parte de la atención integral se cuenta con el servicio de atención psicológica al menor.
                                A su corta edad muchos de los Niños, Niñas y adolescentes atendidos han sido migrantes transnacionales
                                y en su recorrido han vivido experiencias traumáticas que pueden marcar su desarrollo. La importancia
                                de la atención psicológica radica en ayudar al joven en el aspecto psicosocial</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="site-section" id="blog-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title mb-3">Nuestra Galeria</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-entry">
                        <a href="single.html"><img src="images/casa.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-entry">
                        <a href="single.html"><img src="images/casa1.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-entry">
                        <a href="single.html"><img src="images/casa12.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-entry">
                        <a href="single.html"><img src="images/casa4.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-entry">
                        <a href="single.html"><img src="images/2.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-entry">
                        <a href="single.html"><img src="images/casa7.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="210">
                    <div class="h-entry">
                        <a href="single.html"><img src="images/casa10.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-entry">
                        <a href="single.html"><img src="images/casa11.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-entry">
                        <a href="single.html"><img src="images/casa12.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="site-section bg-light" id="contact-section" data-aos="fade">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3">Contáctanos</h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 text-center">
                    <p class="mb-4">
                        <span class="icon-room d-block h4 text-primary"></span>
                        <span>El Paraíso, El Paraíso Honduras C.A</span>
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="mb-4">
                        <span class="icon-phone d-block h4 text-primary"></span>
                        <a href="#">(504) 98000025</a>
                    </p>
                    <p class="mb-4">
                        <span class="icon-phone d-block h4 text-primary"></span>
                        <a href="#">(504) 2793-4894</a>
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="mb-0">
                        <span class="icon-mail_outline d-block h4 text-primary"></span>
                        <a href="#">doncastriotti@gmail.com</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-5"></div>
            </div>
        </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="footer-heading mb-6">Acerca de</h2>
                            <p>Hasta la fecha, el sistema educativo no permite la incorporación de alumnos una vez iniciado
                                el curso escolar y las oportunidades de empleo y emprendimiento son escasas.</p>
                        </div>
                        <div class="col-md-2">
                            <h2 class="footer-heading mb-4">Enlaces</h2>
                            <ul class="list-unstyled">
                                <li><a href="#about-section" class="smoothscroll">Acerca de</a></li>
                                <li><a href="#services-section" class="smoothscroll">Servicios</a></li>
                                <li><a href="#blog-section" class="smoothscroll">Galeria</a></li>
                                <li><a href="#contact-section" class="smoothscroll">Contáctanos</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h2 class="footer-heading mb-4">Horarios de atención</h2>
                            <p>Lunes-Viernes  8:00 am a 4:00 pm</p>
                            <p>Sábados 8:00 am a 12:00 pm</p>
                        </div>
                        <div class="col-md-2">
                            <h2 class="footer-heading">Soporte técnico</h2>
                            <span class="icon-mail_outline d-block h4 text-primary"></span>
                            <a href="#">montielkarina1@gmail.com</a>
                            <span class="icon-mail_outline d-block h4 text-primary"></span>
                            <a href="#">maridiaz4455@gmail.com</a>
                            <span class="icon-mail_outline d-block h4 text-primary"></span>
                            <a href="#">tania.calix@yahoo.com</a><br>
                            <span class="icon-mail_outline d-block h4 text-primary"></span>
                            <a href="#">murillodaniela408@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div> <!-- .site-wrap -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/isotope.pkgd.min.js"></script>


<script src="js/main.js"></script>

</body>
</html>
