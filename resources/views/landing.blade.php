<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OPC SRL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('img/icon.png') }}" type="image/icon type">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1><a href="index.html">OPC</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid"></a> --}}
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route('landing')}}">Inicio</a></li>
          <li class="drop-down"><a href="">Acerca</a>
            <ul>
              <li><a href="#about">Nosotros</a></li>
              <li><a href="#team">Equipo</a></li>
              <li><a href="#historia">Historia</a></li>
            </ul>
          </li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Imagenes</a></li>
          <li><a href="#testimonials">Testimonios</a></li>
          <li><a href="#contact">Contacto</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
    {{--<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>--}}
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Bienvenido a <span>OPC SRL</span></h1>
      <h2>Somos un equipo dedicado a proveer seguridad y monitoreo a clientes</h2>
      <a href="#about" class="btn-get-started scrollto">EMPEZAR</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>Que hacemos en OPC?</h2>
          <p>Estamos comprometidos a brindar servicio de seguridad y monitoreo de alto nivel</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-check-shield"></i></div>
              <h4><a href="">Seguridad Fisica</a></h4>
              <p>Ofrecemos seguridad privada con personal altamente capacitado y responsable</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-camera-home"></i></div>
              <h4><a href="">Monitoreo con Camaras</a></h4>
              <p>Ofrecemos monitoreo por camara con los mejores productos disponibles</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-run"></i></div>
              <h4><a href="">Efectividad y Compromiso</a></h4>
              <p>Nos caracterizamos por una altisima expeditividad y compromiso a nuestro trabajo</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{ asset('img/acerca.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Sobre Nosotros</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul>
            <div class="row icon-boxes">
              <div class="col-md-6">
                <i class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6 mt-4 mt-md-0">
                <i class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <br>
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">200</span>
              <p>Clientes Satisfechos</p>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">200</span>
              <p>Trabajos realizados</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-police-cap"></i>
              <span data-toggle="counter-up">1,530</span>
              <p>Horas de Seguridad</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p>Empleados Dedicados</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Servicios</h2>
          <p>Nos destacamos en los siguientes servicios que ofrecemos</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="icofont-computer"></i>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="icofont-chart-bar-graph"></i>
              <h4><a href="#">Dolor Sitema</a></h4>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-image"></i>
              <h4><a href="#">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-settings"></i>
              <h4><a href="#">Nemo Enim</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-earth"></i>
              <h4><a href="#">Magni Dolore</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-tasks-alt"></i>
              <h4><a href="#">Eiusmod Tempor</a></h4>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Imagenes</h2>
          <p>Nuestras imagenes para que nos conozcas mejor</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">TODAS</li>
              <li data-filter=".filter-camaras">CAMARAS</li>
              <li data-filter=".filter-seguridad">SEGURIDAD</li>
              <li data-filter=".filter-logo">LOGO</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-seguridad wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('img/portfolio/monitoreo.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('img/portfolio/monitoreo.jpg') }}" data-gall="portfolioGallery" class="link-preview venobox" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Centro de monitoreo</a></h4>
                <p>Monitoreo de camaras</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-logo wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('img/portfolio/logo800x600.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('img/portfolio/logo800x600.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Nuestro Logo</a></h4>
                <p>El logo de nuestra empresa</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-camaras wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('img/portfolio/camara.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('img/portfolio/camara.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Camara</a></h4>
                <p>Nuestra camara monitoreando</p>
              </div>
            </div>
          </div>

          {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('img/portfolio/portfolio-5.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('img/portfolio/portfolio-7.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('img/portfolio/portfolio-8.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('img/portfolio/portfolio-9.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div> --}}

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonios</h2>
          <p>Algunas recomendaciones de nuestros clientes</p>
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{ asset('img/testimonials/cliente.png') }}" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{ asset('img/testimonials/cliente.png') }}" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{ asset('img/testimonials/cliente.png') }}" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{ asset('img/testimonials/cliente.png') }}" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{ asset('img/testimonials/cliente.png') }}" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Equipo</h2>
          <p>Sit sint consectetur velit quos quisquam cupiditate nemo qui</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>Contactanos por cualquier pedido para contratarnos o duda</p>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Ubicacion:</h4>
                  <p>Monroe 2764 6 “A”</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>opcsrlseguridad@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Numero:</h4>
                  <p>5351-7866</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form method="POST" role="form" id="postComment" class="php-email-form">
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Su Nombre" data-rule="minlen:4" data-msg="Por favor introducir al menos 4 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Su Email" data-rule="email" data-msg="Por favor ingresar un mail valido" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" data-rule="minlen:8" data-msg="Por favor introducir al menos 8 caracteres de asunto" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="mensaje" id="mensaje" rows="5" data-rule="required" data-msg="Por favor introducir algun mensaje" placeholder="Me gustaria..."></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <section id="historia">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>OPC SRL</h3>
            <p>
              Monroe 2764 6 “A” <br>
              CABA, Buenos Aires<br>
              Argentina <br><br>
              <strong>Telefono:</strong> 5351-7866<br>
              <strong>Email:</strong> opcsrlseguridad@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Nuestra historia</h4>
            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>

          <div class="col-lg-5 col-md-6 footer-contact">
            <h4>Mision y Vision</h4>
            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>OPC SRL</span></strong>. Todos los derechos reservados
        </div>
        <div class="credits">
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a class="twitter"></a>
        <a class="facebook"></a>
        <a class="instagram"></a>
        <a class="google-plus"></a>
        <a class="linkedin"></a>
      </div>
      </section>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

  <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
  <script src="{{ asset('js/jquery.validate.min.js') }}"></script>

  <script>
    
    $(document).ready(function() {
      $('#postComment').validate({
        rules: {
          nombre : {
            required: true,
            minlength: 4
          },
          email: {
            required: true,
            email: true
          },
          asunto: {
            required: true,
            minlength: 8
          },
          mensaje: {
            required: true,
            minlength: 8
          }
        }
      });
    });

    $('#postComment').submit(function(e){
      
      if ($('#postComment').valid()) { 
        e.preventDefault();
        var nombre = $("input[name=nombre]").val();
        var email = $("input[name=email]").val();
        var asunto = $("input[name=asunto]").val();
        var mensaje = $("#mensaje").val();
        var _token = $("input[name=_token]").val();
        $.ajax({
          url:"{{ route('postComment') }}",
          type:"POST",
          data:{
            nombre:nombre,
            email:email,
            asunto:asunto,
            mensaje:mensaje,
            _token:_token
          },
          success:function(response){
            console.log(response)
            $('#postComment').trigger("reset");
            Swal.fire({
              title: 'Éxito!',
              text: 'El mensaje se ha mandado!',
              icon: 'success',
              showConfirmButton: true,
              timer: 3000
            })
          },
          error: function(xhr, textStatus, error){
            $('#postComment').trigger("reset");
            Swal.fire({
              title: 'Error!',
              text: 'El mensaje no se ha mandado!',
              icon: 'error',
              showConfirmButton: true,
              timer: 3000
            })
          }
        })
      }
    })

  </script>

</body>

</html>