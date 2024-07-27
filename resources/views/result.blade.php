@extends('layouts/defaults')

{{-- Page title --}}
@section('title')
Complient
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
  <section id="index" class="about">
    <div class="container" data-aos="fade-up"> 
<!-- 
        <div class="row"> -->
        <div class="row">
        <!-- <div class="image" style='background-image: url("assets/img/4.jpg");' > -->




<div class="container">
    <div class="col-md-6 col-md-offset-3">
     
       @if( !empty($success))
    <div class="alert alert-success">
        {{ $success }}
    </div>
      @endif
     
    </div>
<br><br>
    @if(isset($data))
    @if( !empty($data) && $data != 'empty')
    
  @foreach($data as $index => $value) 
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: {{$value->status}}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  <div class="row">
     <div class="col">#
        </div>
        <div class="col">Question
        </div>
        <div class="col">Answer
        </div>
        
</div>
<hr>
<div class="row">
<div class="col">{{$index+1}}
        </div>
     <div class="col">corruption_type
        </div>
        <div class="col">{{$value->corruption_type}}
        </div>
        
</div>
<hr>
<div class="row">
<div class="col">{{$index+2}}
        </div>
     <div class="col">corruption_person_name
        </div>
        <div class="col">{{$value->corruption_person_name}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+3}}
        </div>
     <div class="col">corruption_conducted_Org
        </div>
        <div class="col">{{$value->corruption_conducted_Org}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+4}}
        </div>
     <div class="col">corruption_conducted_place
        </div>
        <div class="col">{{$value->corruption_conducted_place}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+5}}
        </div>
     <div class="col">beneficiary_person
        </div>
        <div class="col">{{$value->beneficiary_person}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+6}}
        </div>
     <div class="col">victim_person
        </div>
        <div class="col">{{$value->victim_person}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+7}}
        </div>
     <div class="col">damage_valued_bymoney
        </div>
        <div class="col">{{$value->damage_valued_bymoney}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+8}}
        </div>
     <div class="col">time
        </div>
        <div class="col">{{$value->time}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+9}}
        </div>
     <div class="col">paper
        </div>
        <div class="col">{{$value->paper}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+10}}
        </div>
     <div class="col">loan
        </div>
        <div class="col">{{$value->loan}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+11}}
        </div>
     <div class="col">tax
        </div>
        <div class="col">{{$value->tax}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+12}}
        </div>
     <div class="col">file
        </div>
        <div class="col">{{$value->file}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+13}}
        </div>
     <div class="col">audio
        </div>
        <div class="col">{{$value->audio}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+14}}
        </div>
     <div class="col">video
        </div>
        <div class="col">{{$value->video}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+15}}
        </div>
     <div class="col">image
        </div>
        <div class="col">{{$value->image}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+16}}
        </div>
     <div class="col">age
        </div>
        <div class="col">{{$value->age}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+17}}
        </div>
     <div class="col">tittle
        </div>
        <div class="col">{{$value->tittle}}
        </div>
        
</div>
<hr><div class="row">
<div class="col">{{$index+18}}
        </div>
     <div class="col">address
        </div>
        <div class="col">{{$value->address}}
        </div>
        
</div>
  @endforeach

    @else
    <div class="alert alert-success">
       Wrong Complient Key!  Please use correct key!
    </div>
    @endif
    <br><br><br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Comment</th>
      <th scope="col">Status</th>
      <th scope="col">Status Bar</th>
      
    </tr>
  </thead>
  <tbody>
   @foreach($result2 as $index=>$value)
    <tr>
      <th scope="row">{{$index+1}}</th>
      <td>{{$value->comment}}</td>
      <td>@if(isset($value->approve))
      {{$value->approve}}      
      @elseif(isset($value->reject))
      {{$value->reject}}
      @endif

      </td>
      <td>
      <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: {{$value->status}}%" aria-valuenow="100" aria-valuemin="" aria-valuemax="100"></div>
</div>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
    @endif
    
    
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</div>
</div>
      </div>
</section>
@stop
<!-- //Container End -->


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
