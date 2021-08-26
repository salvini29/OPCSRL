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
              <li><a href="#particularidades">Particularidades</a></li>
            </ul>
          </li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Imagenes</a></li>
          <li><a href="#testimonials">Clientes</a></li>
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
            <h3>Sobre nosotros</h3>
            <p>
              Aseguramos a todos nuestros clientes confianza, experiencia (30 años en el mercado), calidad, precio competitivo, seguridad, compromiso, trato personalizado, respuesta inmediata y honestidad. 
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Buenas recomendaciones de parte de todos los clientes.</li>
              <li><i class="bx bx-check-double"></i> Buena atención personalizada a cada uno de nuestros clientes.</li>             
            </ul>
            <div class="row icon-boxes">
              <div class="col-md-6">
                <i class="bx bx-dollar"></i>
                <h4>Valor de servicio</h4>
                <p>Tenemos un valor altamente competitivo respecto a las demas opciones del mercado.</p>
              </div>
              <div class="col-md-6 mt-4 mt-md-0">
                <i class="bx bx-happy-alt"></i>
                <h4>Calidad de servicio</h4>
                <p>Nos diferenciamos con una calidad de servicio muy superior respecto a la competencia.</p>
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
              <i class="icofont-police-cap"></i>
              <h4><a>Seguridad física</a></h4>
              <p>Proveemos el personal capacitado para la detección y prevención de riesgos para la protección</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="icofont-ui-alarm"></i>
              <h4><a>Sistemas de alarmas</a></h4>
              <p>Ofrecemos sistemas de alarmas con tecnología punta para edificios, casas, predios y más</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-cc-camera"></i>
              <h4><a>Sistemas de circuito cerrado de televisión</a></h4>
              <p>Disponemos de la tecnología de videovigilancia diseñada para supervisar una diversidad de ambientes y actividades asegurando areas enteras</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-calculator-alt-2"></i>
              <h4><a>Sistemas para control</a></h4>
              <p>Manejamos perfectamente sistemas diseñados exclusivamente para el control de acceso y sistemas de control de horario</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-investigation"></i>
              <h4><a>Estudios de seguridad</a></h4>
              <p>Realizamos estudios de instalaciones que permiten identificar las amenazas a las que su instalación está expuesta</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-read-book"></i>
              <h4><a>Auditoría y gerenciamiento</a></h4>
              <p>Estamos capacitados para poder auditar y gerenciar todo lo relacionado a cuestiones de seguridad</p>
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
                <a href="{{ asset('img/portfolio/monitoreo.jpg') }}" data-gall="portfolioGallery" class="link-preview venobox" title="Agrandar"><i class="bx bx-plus"></i></a>
                <a href="/img/portfolio/monitoreo.jpg" class="link-details" title="Copiar Link"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a>Centro de monitoreo</a></h4>
                <p>Monitoreo de camaras</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-logo wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('img/portfolio/logo800x600.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('img/portfolio/logo800x600.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Agrandar"><i class="bx bx-plus"></i></a>
                <a href="/img/portfolio/logo800x600.jpg" class="link-details" title="Copiar Link"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a>Nuestro Logo</a></h4>
                <p>El logo de nuestra empresa</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-camaras wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('img/portfolio/camara.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('img/portfolio/camara.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Agrandar"><i class="bx bx-plus"></i></a>
                <a href="/img/portfolio/camara.jpg" class="link-details" title="Copiar Link"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a>Camara</a></h4>
                <p>Nuestra camara monitoreando</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Clientes</h2>
          <p>Algunos de nuestros clientes que confian en nosotros</p>
        </div>

        <div class="owl-carousel testimonials-carousel">

          {{-- <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
          </div> --}}


          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Consorcio de los propietarios Arribeños</h3>
            <h4>2153</h4>
          </div>

          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Consorcio de los propietarios La Pampa</h3>
            <h4>2944 53</h4>
          </div>

          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Consorcio de copropietarios Gorostiaga</h3>
            <h4>2318 20 22 24 26</h4>
          </div>

          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Consorcio Edificio Alsina</h3>
            <h4>2886</h4>
          </div>

          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Consorcio Edificio Olleros</h3>
            <h4>1900 esq.luis m.campos 1091</h4>
          </div>

          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Consorcio Propiedad Luis Maria Campos</h3>
            <h4>1519</h4>
          </div>

          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Consorcio Propiedad Luis Maria Campos</h3>
            <h4>1519</h4>
          </div>

          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Consorcio Carlos Pellegrini</h3>
            <h4>885 887</h4>
          </div>

          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Consorcio Calle Arcos</h3>
            <h4>1755 1757 1759</h4>
          </div>

          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Consorcio Edificio Manuel Ugarte</h3>
            <h4>2341 45 51</h4>
          </div>

          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Consorcio de copropietarios Santa Fe</h3>
            <h4>4860 CAP</h4>
          </div>

          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Consorcio de propietarios Conesa</h3>
            <h4>976 86 92</h4>
          </div>

          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Consorcio de propietarios Acoyte y Vallese</h3>
            <h4>450</h4>
          </div>

          <div class="testimonial-item">
            <div class="row" style="margin-top: 20px;">
              <img src="{{ asset('img/testimonials/cliente.jpg') }}" class="testimonial-img" alt="">
              <i class="icofont-plus" style="margin-top: 45px; color: black;"></i>
              <img src="{{ asset('img/testimonials/cliente2.jpg') }}" class="testimonial-img" alt="">
            </div>
            <h3 style="margin-top: 80px;">Clinica Carminatti</h3>
            <h4>Dra Carolina Carminatti SRL</h4>
          </div>


        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Equipo</h2>
          <p>Este es el equipo dedicado siempre a llevar el mejor servicio de seguridad del mercado</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset('img/team/jefe.png') }}" alt="">
              <h4>Cristian Pedro Dorigón</h4>
              <span>Socio Gerente</span>
              <br>
              <p>
                Hace 30 años comprometido a mantener una empresa que proporcione el mejor servicio posible de seguridad.
              </p>
              <div class="social">
                {{-- <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a> --}}
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
      <section id="particularidades">
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
            <h4>Particularidades</h4>
            <p>Nos destacamos frente a la competencia porque tenemos las diferentes <strong>particularidades</strong>:
              <br>
              -No hay rotacion de vigiladores
              <br>
              -Atencion personalizada por directivos
              <br>
              -Sin deudas con organismos de control
              <br>
              -Sin conflictos judiciales con el personal de vigilancia</p>
          </div>

          <div class="col-lg-5 col-md-6 footer-contact">
            <h4>Visión</h4>
            <p>Nuestra visión es ampliar los servicios prestados pudiendo obtener <strong>NUEVOS CLIENTES</strong>, expandir la empresa, tener un mayor alcance y <strong>CONSOLIDAR LA FIDELIZACIÓN</strong> de los clientes que confian en nosotros actualmente.</p>
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

  <script type="text/javascript">

    $('.link-details').click(function (e) {
       e.preventDefault();
       var copyText = $(this).prop('href');

       document.addEventListener('copy', function(e) {
          e.clipboardData.setData('text/plain', copyText);
          e.preventDefault();
       }, true);

       document.execCommand('copy');  
       Swal.fire({
              title: 'Éxito!',
              text: 'El link se ha copiado!',
              icon: 'success',
              showConfirmButton: true,
              timer: 3000
      })
     
     });


  </script>

</body>

</html>