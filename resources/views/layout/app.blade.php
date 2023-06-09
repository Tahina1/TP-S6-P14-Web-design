<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="@yield('meta')" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{secure_url('assets/img/favicon.png')}}" rel="icon">
  <link href="{{secure_url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{secure_url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{secure_url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{secure_url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{secure_url('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{secure_url('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{secure_url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{secure_url('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{secure_url('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="/assets/img/logo.png" alt="logo">
        <span class="d-none d-lg-block">Article sur L'IA</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    @if (session('admin'))
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="{{secure_url('/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{session('admin')->username}}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <h6>{{session('admin')->username}}</h6>

                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="/logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                    </a>
                </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    @endif


  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Article</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            @if (session('admin'))
                <li>
                    <a href="/create-article">
                    <i class="bi bi-circle"></i><span>Nouvel article</span>
                    </a>
                </li>
            @endif

          <li>
            <a href="/">
              <i class="bi bi-circle"></i><span>Liste des articles</span>
            </a>
          </li>

        </ul>
      </li><!-- End Tables Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <!-- ======= Main ======= -->
  @yield('main')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{secure_url('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{secure_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{secure_url('assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{secure_url('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{secure_url('assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{secure_url('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{secure_url('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{secure_url('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{secure_url('assets/js/main.js')}}"></script>



</body>

</html>
