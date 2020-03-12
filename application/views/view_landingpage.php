<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
<!--   <meta content="width=device-width, initial-scale=1.0" name="viewport">   -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title>Siaduan - Home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Amoeba - v2.0.0
  * Template URL: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<!-- ===========================
    custom style button 
    ============================-->

    <style>
      .btn {
        background-color: #f4511e;
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        opacity: 1;
        transition: 0.3s;
      }

      .btn:hover {opacity: 0.6}
    </style>

<!-- ===========================
    custom style button end
    ============================-->

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="<?php echo base_url('index.html') ?>"><span>Siaduan</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">Laporkan Temuan</a></li>
          <li><a href="#services">Mekanisme Aduan</a></li>
          <li><a href="#portfolio">Daftar Aduan</a></li>
          <li><a href="#team">Tentang Siaduan</a></li>
<!--           <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul> -->
          </li>
          <li><a href="#contact">Hubungi Kami</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to Siaduan</h1>
      <h2>Laporkan temuanmu pada bagian rumah tangga SI Surabaya.</h2>
      <a href="#about" class="btn-get-started scrollto">Mulai</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Laporkan Temuanmu!</h2>
        </div>

        <div class="container center-block">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Isikan namamu" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
<!--               <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div> -->
              <!-- <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div> -->


<!--               <input type="submit" value="Upload Image" name="submit"> -->
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Ceritakan laporanmu untuk kami!" placeholder="Ceritakan temuanmu..."></textarea>
                <div class="validate"></div>
              </div>

              <form>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </form>


              <!-- <div>
              <p>Lampirkan:</p>
              <input type="file" name="fileToUpload" id="fileToUpload">
              </div> -->

              <br>
              <br>
<!--               <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button class="btn" type="submit">Kirim</button></div>
            </form>
          </div>

        <!-- <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="<?php echo base_url('assets/img/about-img.jpg') ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div> -->

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Mekanisme aduan Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Mekanisme Aduan</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 icon-box">
            <div class="icon"><i class="icofont-google-talk"></i></div>
            <h4 class="title"><a href=""> 1. Sampaikan Temuanmu</a></h4>
            <p class="description">Jika kamu menemukan fasilitas kantor SISUB yang rusak, ceritakan temuanmu dengan detail beserta fotonya.</p>
          </div>
          <div class="col-lg-3 col-md-6 icon-box">
            <div class="icon"><i class="icofont-fix-tools"></i></div>
            <h4 class="title"><a href="">2. Lakukan Perbaikan</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-3 col-md-6 icon-box">
            <div class="icon"><i class="icofont-checked"></i></div>
            <h4 class="title"><a href="">3. Update Status Penanganan</a></h4>
            <p class="description">Laporkan kondisi terkini dari temuanmu.</p>
          </div>
          <div class="col-lg-3 col-md-6 icon-box">
            <div class="icon"><i class="icofont-data"></i></div>
            <h4 class="title"><a href="">4. Keep it!</a></h4>
            <p class="description">Temuan dan kondisinya akan otomatis tersimpan oleh sistem.</p>
          </div>
          <!-- <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div> -->
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
<!--     <section class="call-to-action">
      <div class="container">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Call To Action Section -->
 
    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Daftar Aduan</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="<?php echo base_url('assets/img/portfolio/portfolio-1.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="<?php echo base_url('assets/img/portfolio/portfolio-1.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="App 1">App 1</a></h3>
                <a href="<?php echo base_url('assets/img/portfolio/portfolio-1.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="<?php echo base_url('assets/img/portfolio/portfolio-2.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="<?php echo base_url('assets/img/portfolio/portfolio-2.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Web 3">Web 3</a></h3>
                <a href="<?php echo base_url('assets/img/portfolio/portfolio-2.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="<?php echo base_url('assets/img/portfolio/portfolio-3.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="<?php echo base_url('assets/img/portfolio/portfolio-3.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="App 2">App 2</a></h3>
                <a href="<?php echo base_url('assets/img/portfolio/portfolio-3.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="<?php echo base_url('assets/img/portfolio/portfolio-4.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="<?php echo base_url('assets/img/portfolio/portfolio-4.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Card 2">Card 2</a></h3>
                <a href="<?php echo base_url('assets/img/portfolio/portfolio-4.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="<?php echo base_url('assets/img/portfolio/portfolio-5.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="<?php echo base_url('assets/img/portfolio/portfolio-5.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Web 2">Web 2</a></h3>
                <a href="<?php echo base_url('assets/img/portfolio/portfolio-5.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="<?php echo base_url('assets/img/portfolio/portfolio-6.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="<?php echo base_url('assets/img/portfolio/portfolio-6.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="App 3">App 3</a></h3>
                <a href="<?php echo base_url('assets/img/portfolio/portfolio-6.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="<?php echo base_url('assets/img/portfolio/portfolio-7.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="<?php echo base_url('assets/img/portfolio/portfolio-7.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Card 1">Card 1</a></h3>
                <a href="<?php echo base_url('assets/img/portfolio/portfolio-7.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="<?php echo base_url('assets/img/portfolio/portfolio-8.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="<?php echo base_url('assets/img/portfolio/portfolio-8.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Card 3">Card 3</a></h3>
                <a href="<?php echo base_url('assets/img/portfolio/portfolio-8.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="<?php echo base_url('assets/img/portfolio/portfolio-9.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="<?php echo base_url('assets/img/portfolio/portfolio-9.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Web 1">Web 1</a></h3>
                <a href="<?php echo base_url('assets/img/portfolio/portfolio-9.jpg') ?>" data-gall="portfolioGallery" class="venobox" title="Web 1"><i class="icofont-plus"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Untuk Diketahui</h2>
        </div>

        <ul class="faq-list">

          <li>
            <a data-toggle="collapse" class="" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Tentang Siaduan</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

<!--         <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo base_url('assets/img/team/team-1.jpg') ?>" alt="">
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
              <img src="<?php echo base_url('assets/img/team/team-2.jpg') ?>" alt="">
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
              <img src="<?php echo base_url('assets/img/team/team-3.jpg') ?>" alt="">
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

        </div> -->

      </div>
    </section>

    <!-- End Our Team Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Hubungi Kami</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
<!-- 
          <div class="col-lg-4 col-md-6">
            <div class="contact-about">
              <h3>Amoeba</h3>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div> -->

          <div class="col-lg-3 col-md-6">
            <div class="info">
              <div>
                <i class="icofont-google-map"></i>
                <p>Jl. Comal No.7-9, Keputran, Kec. Tegalsari
                  <br>Kota SBY, Jawa Timur 60265</p>
              </div>

              <div>
                <i class="icofont-envelope"></i>
                <p>mail.ptsi.co.id</p>
              </div>

              <div>
                <i class="icofont-phone"></i>
                <p>(031) 5681750</p>
              </div>

            </div>
          </div>

          <!-- <div class="col-lg-5 col-md-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div> -->

        </div>

      </div>
    </section><!-- End Contact Us Section -->

    <!-- ======= Map Section ======= -->
    <!--  -->
    <!-- End Map Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Surveyor Indonesia</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/ -->
        Develop by <a href="https://bootstrapmade.com/">SI Surabaya</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/venobox/venobox.min.js') ?>"></script>

  <script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
  </script>
  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js') ?>"></script>

</body>

</html>