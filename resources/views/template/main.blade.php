<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="description" content="Generasi Cakrawala by FIM Medan & FIM Deli Serdang.">
  <meta name="keywords" content="Gencar, Generasi Cakrawala, FIM Medan, FIM Deli Serdang">
  <link rel="canonical" href="https://html.themewant.com/fluxi/">
  <meta name="robots" content="index, follow">
  <!-- for open graph social media -->
  <meta property="og:title" content="Generasi Cakrawala">
  <meta property="og:description" content="Generasi Cakrawala by FIM Medan & FIM Deli Serdang.">
  <meta property="og:image" content="{{ asset('assets/img/logo_circle.png') }}">
  <meta property="og:url" content="https://html.themewant.com/fluxi/">
  <!-- for twitter sharing -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Generasi Cakrawala">
  <meta name="twitter:description" content="Generasi Cakrawala by FIM Medan & FIM Deli Serdang.">
  <!-- favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo_circle.png') }}">
  <title>Generasi Cakrawala</title>
  <!-- swiper css -->
  <link rel="stylesheet preload" href="{{ asset('assets/css/plugins/swiper.min.css') }}" as="style">
  <!-- magnific popup css -->
  <link rel="stylesheet preload" href="{{ asset('assets/css/plugins/magnific-popup.css') }}" as="style">
  <!-- metismenu css -->
  <link rel="stylesheet preload" href="{{ asset('assets/css/plugins/metismenu.css') }}" as="style">
  <!-- bootstrap css -->
  <link rel="stylesheet preload" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}" as="style">
  <!-- fontawesome css -->
  <link rel="stylesheet preload" href="{{ asset('assets/css/plugins/fontawesome.min.css') }}" as="style">
  <!-- Custom css -->
  <link rel="stylesheet preload" href="{{ asset('assets/css/style.css') }}" as="style">
</head>

<body>
  <!-- header area start -->
  <header class="header-style-one header--sticky">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-style-one-wrapper">
            <div class="logo-area">
              <a href="/" class="logo">
                <img class="light" src="{{ asset('assets/img/logo_gencar.png') }}" alt="logo" width="160px">
                <img class="dark" src="{{ asset('assets/img/logo_gencar.png') }}" alt="logo" width="160px">
              </a>
            </div>
            <nav class="main-nav-area">
              <ul class="list-unstyled fluxi-desktop-menu">
                <li class="menu-item"><a class="main-element fluxi-dropdown-main-element" href="/">Home</a></li>
                <li class="menu-item fluxi-has-dropdown">
                  <a href="#" class="fluxi-dropdown-main-element">Divisi</a>
                  <!-- Start Dropdown Menu -->
                  <ul class="fluxi-submenu list-unstyled menu-home">
                    <li class="nav-item"><a class="nav-link page" href="#literasi">Literasi</a></li>
                    <li class="nav-item"><a class="nav-link page" href="#rumbel">Rumah Belajar (Rumbel)</a></li>
                    <li class="nav-item"><a class="nav-link page" href="#cakrawala">Program Cakrawala</a></li>
                  </ul>
                  <!-- End Dropdown Menu -->
                </li>
                {{-- <li class="menu-item fluxi-has-dropdown">
                  <a href="#" class="fluxi-dropdown-main-element">Services</a>
                  <!-- Start Dropdown Menu -->
                  <ul class="fluxi-submenu list-unstyled menu-home">
                    <li class="nav-item"><a class="nav-link page" href="service.html">Service</a></li>
                    <li class="nav-item sub-dropdown">
                      <a href="#" class="nav-link sub-menu-link">Service Details</a>
                      <ul class="fluxi-submenu third-lvl base">
                        <li><a class="mobile-menu-link" href="service-single.html">Paid Search Marketing</a></li>
                        <li><a class="mobile-menu-link" href="email-marketing.html">Email Marketing</a></li>
                        <li><a class="mobile-menu-link" href="social-media-marketing.html">Social Media Marketing</a>
                        </li>
                        <li><a class="mobile-menu-link" href="influencer-marketing.html">Influencer Marketing</a></li>
                      </ul>
                    </li>
                  </ul>
                  <!-- End Dropdown Menu -->
                </li>
                <li class="menu-item fluxi-has-dropdown">
                  <a href="#" class="fluxi-dropdown-main-element">Work</a>
                  <!-- Start Dropdown Menu -->
                  <ul class="fluxi-submenu list-unstyled menu-home">
                    <li class="nav-item"><a class="nav-link page" href="case-studies.html">Case Studies</a></li>
                    <li class="nav-item"><a class="nav-link" href="single-case-studies.html">Case Studies Details</a>
                    </li>
                  </ul>
                  <!-- End Dropdown Menu -->
                </li>
                <li class="menu-item fluxi-has-dropdown">
                  <a href="#" class="fluxi-dropdown-main-element">Blog</a>
                  <!-- Start Dropdown Menu -->
                  <ul class="fluxi-submenu list-unstyled menu-home">
                    <li class="nav-item"><a class="nav-link page" href="blog.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog-grid.html">Blog Grid</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog-grid-2.html">Blog Grid Right Sidebar</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog-grid-3.html">Blog Grid Left Sidebar</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                  </ul>
                  <!-- End Dropdown Menu -->
                </li> --}}

                <li class="menu-item"><a class="main-element fluxi-dropdown-main-element"
                    href="{{ route('register') }}">Gencar 8</a></li>
              </ul>
            </nav>
            <div class="button-area-start">
              {{-- <a href="free-audit.html" class="text-btn">Get Free Audit</a> --}}
              <a href="{{ route('register') }}" class="rts-btn btn-primary-5">Daftar Gencar</a>
              <div class="menu-btn" id="menu-btn">
                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                  <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                  <rect width="20" height="2" fill="#1F1F25"></rect>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header area end -->

  @yield('content')

  <div class="rts-footer-area footer-five rts-section-gapTop pb--65">
    <div class="container mb--65">
      <div class="row g-48 g-lg-0">
        <div class="col-lg-2 col-md-4 col-sm-6">
          <!-- single footer four wized -->
          <div class="single-footer-four-wized">
            <h5 class="title">Internal</h5>
            <ul>
              <li><a href="#">FIM Deli Serdang</a></li>
              <li><a href="#">FIM Medan</a></li>
              <li><a href="#">Generasi Cakrawala</a></li>
            </ul>
          </div>
          <!-- single footer four wized end -->
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <!-- single footer four wized -->
          <div class="single-footer-four-wized">
            <h5 class="title">Bantuan</h5>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Help center</a></li>
              <li><a href="#">Ask for support</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <!-- single footer four wized end -->
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <!-- single footer four wized -->
          <div class="single-footer-four-wized">
            <h5 class="title">Media</h5>
            <ul>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Instagram</a></li>
            </ul>
          </div>
          <!-- single footer four wized end -->
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <!-- single footer four wized -->
          <div class="single-footer-four-wized">
            <h5 class="title">Legal</h5>
            <ul>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Cookies</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
          <!-- single footer four wized end -->
        </div>
        <div class="col-lg-4 col-md-8 col-sm-12">
          <!-- single footer four wized -->
          <div class="single-footer-four-wized">
            <h5 class="title">Newsletter</h5>
            <div class="footer-input-btn-between">
              <form action="#">
                <input required type="email" placeholder="Your email..">
                <button class="rts-btn btn-primary-4">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="copyright-area-four pt--65 mt-65 border-top">
            <a href="#" class="logo">
              <img class="light" src="{{ asset('assets/img/logo_gencar.png') }}" alt="logo" width="160px">
              <img class="dark" src="{{ asset('assets/img/logo_gencar.png') }}" alt="logo" width="160px">
            </a>
            <p>©
              <script>
                document.write(
                  new Date().getFullYear()
                )
              </script> GenerasiCakrawala, All right reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="anywhere-home" class="">
  </div>


  <!-- side bar area  -->
  <div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu" aria-label="Close Sidebar"><i class="fa-sharp fa-thin fa-xmark"></i></button>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
      <nav class="nav-main mainmenu-nav mt--30">
        <ul class="mainmenu metismenu" id="mobile-menu-active">
          <li class="has-droupdown">
            <a href="#" class="main">Home</a>
            <ul class="submenu mm-collapse">
              <li><a class="mobile-menu-link" href="index.html">SEO Marketing</a></li>
              <li><a class="mobile-menu-link" href="index-two.html">Digital Marketing</a></li>
              <li><a class="mobile-menu-link" href="index-three.html">Digital Agency</a></li>
              <li><a class="mobile-menu-link" href="index-four.html">Startup Agency</a></li>
              <li><a class="mobile-menu-link" href="index-five.html">Advertising Agency</a></li>
              <li><a class="mobile-menu-link" href="index-six.html">Web Design Agency</a></li>
              <li><a class="mobile-menu-link" href="index-seven.html">Social Media Agency</a></li>
              <li><a class="mobile-menu-link" href="index-eight.html">SEO Agency</a></li>
            </ul>
          </li>
          <li class="has-droupdown">
            <a href="#" class="main">Pages</a>
            <ul class="submenu mm-collapse">
              <li><a class="mobile-menu-link" href="about.html">About</a></li>
              <li><a class="mobile-menu-link" href="team.html">Our Team</a></li>
              <li><a class="mobile-menu-link" href="faq.html">FAQ's</a></li>
              <li><a class="mobile-menu-link" href="book-a-demo.html">Book a Demo</a></li>
              <li><a class="mobile-menu-link" href="free-audit.html">Free Audit</a></li>
              <li><a class="mobile-menu-link" href="pricing.html">Pricing Plans</a></li>
              <li><a class="mobile-menu-link" href="404.html">404 Page</a></li>
            </ul>
          </li>
          <li class="has-droupdown">
            <a href="#" class="main">Services</a>
            <ul class="submenu mm-collapse">
              <li><a class="mobile-menu-link" href="service.html">Services</a></li>
              <li class="has-droupdown third-lvl">
                <a class="main" href="#">Service Details</a>
                <ul class="submenu-third-lvl mm-collapse">
                  <li><a href="service-details.html"></a>Paid Search Marketing</li>
                  <li><a href="email-marketing.html"></a>Email Marketing</li>
                  <li><a href="social-media-marketing.html"></a>Social Media Marketing</li>
                  <li><a href="influencer-marketing.html"></a>Influencer Marketing</li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="has-droupdown">
            <a href="#" class="main">Work</a>
            <ul class="submenu mm-collapse">
              <li><a class="mobile-menu-link" href="case-studies.html">Case Studies</a></li>
              <li><a class="mobile-menu-link" href="single-case-studies.html">Case Studies Details</a></li>
            </ul>
          </li>
          <li class="has-droupdown">
            <a href="#" class="main">Blog</a>
            <ul class="submenu mm-collapse">
              <li><a class="mobile-menu-link" href="blog.html">Blog</a></li>
              <li><a class="mobile-menu-link" href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
              <li><a class="mobile-menu-link" href="blog-grid.html">Blog Grid</a></li>
              <li><a class="mobile-menu-link" href="blog-grid-2.html">Blog Grid Right Sidebar</a></li>
              <li><a class="mobile-menu-link" href="blog-grid-3.html">Blog Grid Left Sidebar</a></li>
              <li><a class="mobile-menu-link" href="blog-details.html">Blog Details</a></li>
            </ul>
          </li>
          <li>
            <a href="contact.html" class="main">Contact Us</a>
          </li>
        </ul>
      </nav>

      <ul class="social-area-one pl--20 mt--100">
        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
      </ul>
    </div>
    <!-- mobile menu area end -->
  </div>
  <!-- side abr area end -->

  <!-- pre loader start -->
  <div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- pre loader end -->

  <!-- THEME MODE SWITCHER -->
  <div class="rts-switcher rts-theme-mode">
    <div class="rts-darkmode">
      <a id="rts-data-toggle" class="rts-dark-light">
        <i class="rts-go-dark fal fa-moon"></i>
        <i class="rts-go-light fa-light fa-sun-bright"></i>
      </a>
    </div>
  </div>
  <!-- THEME MODE SWITCHER END -->

  <!-- progress area start -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
        style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
      </path>
    </svg>
  </div>
  <!-- progress area end -->



  <!-- jquery js -->
  <script defer src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
  <script defer src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
  <script defer src="{{ asset('assets/js/plugins/metismenu.js') }}"></script>
  <script defer src="{{ asset('assets/js/vendor/jqueryui.js') }}"></script>
  <script defer src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>
  <script defer src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
  <script defer src="{{ asset('assets/js/plugins/theia-sticky-sidebar.min.js') }}"></script>
  <script defer src="{{ asset('assets/js/plugins/gsap.min.js') }}"></script>
  <script defer src="{{ asset('assets/js/plugins/scrolltigger.js') }}"></script>
  <script defer src="{{ asset('assets/js/vendor/split-text.js') }}"></script>
  <script defer src="{{ asset('assets/js/vendor/split-type.js') }}"></script>
  <script defer src="{{ asset('assets/js/vendor/waw.js') }}"></script>
  <script defer src="{{ asset('assets/js/plugins/counter-up.js') }}"></script>
  <script defer src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
  <!-- contact form js -->
  <script defer src="{{ asset('assets/js/plugins/contact-form.js') }}"></script>
  <script defer src="{{ asset('assets/js/plugins/main.js') }}"></script>


</body>

</html>
