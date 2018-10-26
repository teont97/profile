<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="IAMX, One Page Responsive HTML Resume Template">
  <meta name="keywords" content="onepage, resume, CV HTML template, personal Vcard, html resume, free resume template, free HTML template, free bootstrap template, personal portfolio, free html portfolio">
  <meta name="author" content="http://trendytheme.net/">

  <title>Chí Nguyễn - Home  </title>

  <!-- Web Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
  <!-- Bootstrap core CSS -->
  <link href="{{ url('public/client/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
  <!-- Font Awesome CSS -->
  <link href="{{ url('public/client/assets/css/font-awesome.min.css') }}" rel="stylesheet" media="screen">
  <!-- Animate css -->
  <link href="{{ url('public/client/assets/css/animate.css') }}" rel="stylesheet">
  <!-- Magnific css -->
  <link href="{{ url('public/client/assets/css/magnific-popup.css') }}" rel="stylesheet">
  <!-- Custom styles CSS -->
  <link href="{{ url('public/client/assets/css/style.css') }}" rel="stylesheet" media="screen">
  <!-- Responsive CSS -->
  <link href="{{ url('public/client/assets/css/responsive.css') }}" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="assets/images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
    <!-- Javascript files -->
    <script src="{{ url('public/client/assets/js/jquery.js') }}"></script>
    <script src="{{ url('public/client/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/client/assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ url('public/client/assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ url('public/client/assets/js/smoothscroll.js') }}"></script>
    <script src="{{ url('public/client/assets/js/wow.min.js') }}"></script>
    <script src="{{ url('public/client/assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ url('public/client/assets/js/jquery.inview.min.js') }}"></script> 
    <script src="{{ url('public/client/assets/js/jquery.easypiechart.js') }}"></script>
    <script src="{{ url('public/client/assets/js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ url('public/client/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
    <script src="{{ url('public/client/assets/js/jquery.fitvids.js') }}"></script>
    <script src="{{ url('public/client/assets/js/scripts.js') }}"></script>

  </head>

  <body>
    <!-- Preloader -->
    <div id="tt-preloader">
      <div id="pre-status">
        <div class="preload-placeholder"></div>
      </div>
    </div>

    <!-- Home Section -->
    <section id="home" class="tt-fullHeight" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">
      <div class="intro">
        <div class="intro-sub">Nguyễn Công Chí</div>
        <h1>Developer <span>Website</span></h1>
        <p>Tôi là 1 Freelance trong việc thiết kế website và  &amp; lập trình với công nghệ mới nhất hiện tại <br>Nếu bạn là doanh nghiệp & cá nhân  đang start up. Thì hãy liên hệ với tôi , <br>  tôi sẽ biến ý tưởng bạn thành sản phẩm .</p>

        <div class="social-icons">
          <ul class="list-inline">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div> <!-- /.social-icons -->
      </div>

      <div class="mouse-icon">
        <div class="wheel"></div>
      </div>
    </section><!-- End Home Section -->




    <!-- Navigation -->
    <header class="header">
      <nav class="navbar navbar-custom" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a>
          </div>

          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#home">Trang chủ</a></li>
              <li><a href="#about">Về Tôi </a></li>
              <li><a href="#resume">Tóm Tắt</a></li>
              <li><a href="#skills">Kỹ Năng</a></li>
              <li><a href="#works">Dự Án Hoàn Thành </a></li>
              <li><a href="#blog">Tin Tức</a></li>
              <li><a href="#contact">Liên Hệ</a></li>
            </ul>
          </div>
        </div><!-- .container -->
      </nav>
    </header><!-- End Navigation -->



    <!-- header end -->
    @yield('content')
    <!-- Footer start -->


    <!-- Footer Section -->
    <footer class="footer-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright text-center">
              <p>&copy;2018 Nguyễn Công Chí. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer><!-- End Footer Section -->


    <!-- Scroll-up -->
    <div class="scroll-up">
      <a href="#home"><i class="fa fa-angle-up"></i></a>
    </div>


  </body>
  </html>