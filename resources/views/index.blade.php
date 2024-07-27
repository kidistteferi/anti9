@extends('layouts/default')

{{-- Page title --}}
@section('title')
Home
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/tabbular.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/animate/animate.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/jquery.circliful.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/index.css') }}">
<!--end of page level css-->
@stop

{{-- slider --}}
@section('top')
<!--Carousel Start -->

<!-- //Carousel End -->
@stop

{{-- content --}}
@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>anti_corruption</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <!-- <h1 class="logo me-auto me-lg-0"><a href="comp_rec.blade.php">ANTI_CORRUPTION<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Powerful Digital Solutions For Corruption<span>.</span></h1>
          </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
          <i class="bi bi-sign-stop"></i>
            <h3><a href="">Stope corruption</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
          <i class="bi bi-x-octagon-fill"></i>
            <h3><a href="">Fight corruption</a></h3>
          </div>
        </div>
        
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
          <i class="bi bi-trash3"></i>
            <h3><a href="">Punishing corruption</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
          <i class="bi bi-trash3"></i>
            <h3><a href="">Discouraging corruption</a></h3>
          </div>
        </div>
      </div> -->

    </div>
  </section><!-- End Hero

  <main id="main">





 <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/test.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Impacts of corruption</h3>
            <p class="fst-italic">
            Corruption also erodes the trust we have in the public sector to act in our best interests. 
            It wastes taxes and rates meant for important community projects.
             This results in poor quality services or infrastructure, or projects never getting off the ground
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> financial loss</li>
              <li><i class="ri-check-double-line"></i> focus and resources being diverted away from delivering core business and services to the community</li>
              <li><i class="ri-check-double-line"></i> damage to relationships.</li>
              <li><i class="ri-check-double-line"></i> criminal charges</li>
              <li><i class="ri-check-double-line"></i> disadvantage to honest businesses seeking to win government contracts.</li>
              <li><i class="ri-check-double-line"></i> lower community confidence in public authorities</li>

            </ul>
           
          </div>
        </div>

      </div>
    </section><!-- End About Section -->





  

    <!-- ======= About Section ======= -->
    <section id="index" class="about">
    <div class="container" data-aos="fade-up"> 
<!-- 
        <div class="row"> -->
        <div class="row">
        <div class="image" style='background-image: url("assets/img/.jpg");' >




<div class="container">
    <div class="col-md-6 col-md-offset-3" >
<form action="{{ route('creater') }}" method="post">
        @csrf
    <div class="mb-3">
    <label for="exampleInputText" class="form-label" data-aos="fade-up" data-aos-delay="150"> <h5>What is the action taken </h5></label>
    <input type="text" name='type' class="form-control form-control-lg" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label" data-aos="fade-up" data-aos-delay="150"><h5>corruption_person_name </h5></label>
    <input type="text" name='name' class="form-control" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label" data-aos="fade-up" data-aos-delay="150"><h5>Age </h5></label>
    <input type="number" min="18" name='age' class="form-control" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label" data-aos="fade-up" data-aos-delay="150"><h5>job title </h5></label>
    <input type="text" name='tittle' class="form-control" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label" data-aos="fade-up" data-aos-delay="150"><h5>Address</h5> </label>
    <input type="text" name='address' class="form-control" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label" data-aos="fade-up" data-aos-delay="150"> <h5>The office where the corruption took place </h5></label>
    <input type="text" name='org' class="form-control" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label" data-aos="fade-up" data-aos-delay="150"><h5> Place </h5> </label>
    <input type="text" name='place' class="form-control" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label" data-aos="fade-up" data-aos-delay="150"> <h5> time </h5></label>
    <input type="date" name='time' class="form-control" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label"data-aos="fade-up" data-aos-delay="150"> <h5>A useful person </h5></label>
    <input type="text" name='benefite' class="form-control" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label" data-aos="fade-up" data-aos-delay="150"><h5>victim_person </h5></label>
    <input type="text" name='victim_person' class="form-control" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label" data-aos="fade-up" data-aos-delay="150"><h5>Financial damage</h5></label>
    <input type="text" name='damage' class="form-control" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label" data-aos="fade-up" data-aos-delay="150"> <h5>If any paper is signed </h5></label>
    <input type="text" name='paper' class="form-control" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label"data-aos="fade-up" data-aos-delay="150"><h5>If a credit is taken</h5></label>
    <input type="text" name='loan' class="form-control" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label" data-aos="fade-up" data-aos-delay="150"><h5>If tax is taken</h5></label>
    <input type="text" name='tax' class="form-control" id="exampleInputText" aria-describedby="textHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label" data-aos="fade-up" data-aos-delay="150"><h5>If any file</h5></label>
    <input type="file" name='file' class="form-control" id="exampleInputfile" aria-describedby="fileHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputfile" class="form-label"data-aos="fade-up" data-aos-delay="150"><h5>If any sound record</h5></label>
    <input type="file" name='audio' accept="audio/*" class="form-control" id="exampleInputfile" aria-describedby="fileHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputfile" class="form-label" data-aos="fade-up" data-aos-delay="150"><h5>If any video record</h5></label>
    <input type="file"  name='video' accept="video/*" class="form-control" id="exampleInputfile" aria-describedby="fileHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputfile" class="form-label"data-aos="fade-up" data-aos-delay="150"><h5>If any photo record</h5></label>
    <input type="file" name='image' accept="image/*" class="form-control" id="exampleInputfile" aria-describedby="fileHelp">
  </div>

            
<div class="form-group">
                
            <!-- <a type="button" class="btn btn-primary" href="" >Create</a> -->
            <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </form>
        </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</div>
</div>
      </div>
</section>

<!-- //Container End -->
<section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/logo-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo-4.png" class="img-fluid" alt=""></div>
            <!-- <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div> -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
      
    </section>


@section('footer_scripts')
<!-- page level js starts-->
<script type="text/javascript" src="{{ asset('js/frontend/jquery.circliful.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/wow/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/index.js') }}"></script>
<!--page level js ends-->
@stop
<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
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
@stop