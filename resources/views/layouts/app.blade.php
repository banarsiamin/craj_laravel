<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'CRAJ - Contemporary Research Analysis Journal')</title>
  <meta name="description" content="@yield('description', '')">
  <meta name="keywords" content="@yield('keywords', '')">

  <meta name="robots" content="noindex, nofollow">

  <!-- Favicons -->
  <link href="{{ asset('img/logo.png') }}" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/" rel="preconnect">
  <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>

<body class="@yield('body-class', 'index-page')">

  <header id="header" class="header position-relative pt-0">
    <div class="top_line">
      <div class="container">
        <div class="row">
          <div class="col-lg-9"></div>
          <div class="col-lg-3">
            <p class="m-0 py-2 text-primary fs-6 text-end fw-bold">Email: info@crajour.org</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid container-xl position-relative">
      <div class="top-row d-flex flex-wrap align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-3">
          <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('img/logo.png') }}" alt="" class="logo">
          </a>
          <div>
            <a href="{{ route('article.submit') }}" class="btn btn-sm btn-primary">Submit Article</a>
            <h1 class="sitename">Contemporary Research<br>Analysis Journal</h1>
          </div>
        </div>

        <div class="d-flex align-items-center issn_numbers">
          <h5 class="fs-6 fw-bold">e-ISSN : 3050-5909 P-ISSN : 3050-5895</h5>
        </div>
      </div>
    </div>

    <div class="nav-wrap">
      <div class="container d-flex justify-content-center position-relative">
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('aims-scope') }}" class="{{ request()->routeIs('aims-scope') ? 'active' : '' }}">Aim & Scope</a></li>
            <li><a href="{{ route('current') }}" class="{{ request()->routeIs('current') ? 'active' : '' }}">Current</a></li>
            <li><a href="{{ route('archive') }}" class="{{ request()->routeIs('archive') ? 'active' : '' }}">Archive</a></li>
            <li class="dropdown">
              <a href="#"><span>Journal Info</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="{{ route('articles.index') }}">Articles</a></li>
              </ul>
            </li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact us</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">
    @yield('content')
  </main>

  <footer id="footer" class="footer bg-footer">

    <div class="container footer-top">
      <div class="row gy-4 justify-content-md-between">
        <div class="col-lg-4 col-md-6 footer-about">
          
          <h4>About Us</h4>
          <div class="footer-contact pt-3">
            <p>Contemporary Research Analysis Journal (CRAJ) is a peer-reviewed, monthly, online and print international research journal. The journal operates with a rigorous peer review process, including double-blind peer review, conducted by members of the editorial board. CRAJ</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="{{ route('articles.index') }}">Current issue</a></li>
            <li><a href="#">Archive</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Indexing</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Author Info</h4>
          <ul>
            <li><a href="#">Author Guideline</a></li>
            <li><a href="#">Open Access Policy</a></li>
            <li><a href="#">Manuscript Template</a></li>
            <li><a href="#">Copyright</a></li>
          </ul>
        </div>


      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p><span>This work is licensed under a
</span> <strong class="px-1 sitename">Creative Commons Attribution 4.0 International License.</strong></p>
      <div class="credits">
        Designed by <a href="#">CRAJ</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/glightbox.min.js') }}"></script>
  <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('js/validate.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html> 