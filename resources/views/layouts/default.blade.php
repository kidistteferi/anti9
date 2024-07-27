<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
        | Welcome to Josh Frontend
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/custom1.css') }}">
    <!--end of global css-
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<body>
    <!-- Header Start -->
    <header>
        <!--Icon Section Start-->
        <div class="icon-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-8 col-md-4 mt-2">
                        
                    </div>
                    <div class="col-lg-8 col-4 col-md-8 text-right mt-2">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container indexpage">

            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto  margin_right">
                        <li class="nav-item {!! (Request::is('/') ? 'active' : '') !!}">
                            <a href="{{ route('result') }}" class="nav-link"> Result</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
            <!-- Nav bar End -->
        </div>
    </header>

    <!-- //Header End -->

    <!-- slider / breadcrumbs section -->
    @yield('top')

    <!-- Content -->
    @yield('content')

    <!-- Footer Section Start -->
    <footer>
        
        <!-- //Footer Section End -->
        <div class=" col-12 copyright">
            <div class="container">
                <p>Copyright &copy; anticorruption, 2023</p>
            </div>
        </div>
    </footer>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button"
        data-original-title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>



    <!--global js starts-->
    <script type="text/javascript" src="{{ asset('js/frontend/lib.js') }}"></script>
    <!--global js end-->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
    <script>
        $(".navbar-toggler-icon").click(function () {
        $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')
    })

    $(function () {
        $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');
    })
    </script>
</body>

</html>
