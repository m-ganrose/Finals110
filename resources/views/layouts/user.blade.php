<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ !empty ($header_title) ? $header_title : ''}} Watch One Piece</title>
  <link rel="icon" href="{{ asset('dist/img/logo1.png') }}" type="image/x-icon">
  
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
  rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset ('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset ('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset ('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset ('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset ('plugins/summernote/summernote-bs4.min.css') }}">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  

  <style>

</style>
    @yield('style')
</head>
<body class="hold-transition layout-top-nav" style="background-color: rgb(135, 135, 218);">
<div class="wrapper">

<!-- Navbar -->
<header class="header">
  <div class="container">
      <div class="row">
          <div class="col-lg-2">
              <div class="header__logo">
                  <a href="/home">
                      <img src="../Sources/logo1.png" alt="">
                  </a>
              </div>
          </div>
          <div class="col-lg-8">
              <div class="header__nav">
                  <nav class="header__menu mobile-menu">
                      <ul>
                          <li><a href="/homes">Homepage</a></li>
                          <li><a href="/cats">Categories <span class="arrow_carrot-down"></span></a>
                              <ul class="dropdown">
                               
                                  <li><a href="/dets">WatchOP Details</a></li>
                                  <li><a href="/watcher">Recent Watching</a></li>
                                  <li><a href="/blogs">Blog Details</a></li>
                              </ul>
                          </li>
                          <li><a href="/newss">News</a></li>
                          <li><a href="/abouts">About Us</a></li>
                          <li class="nav-item dropdown">
                              @if (Auth::user()->profile_image)
                              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                  aria-haspopup="true" aria-expanded="false">
                                  <img style="height: 40px; width: 40px;"
                                      src="{{ url('/storage/' . Auth::user()->profile_image) }}"
                                      class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
                                  {{ Auth::user()->name }} {{ Auth::user()->last_name }}
                              </a>
                              @else
                              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                  aria-haspopup="true" aria-expanded="false">
                                  <img style="height: 40px; width: 40px;" src="{{ asset('/Sources') }}/def.jpg"
                                      alt="Default Profile Image" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
                                  {{ Auth::user()->name }} {{ Auth::user()->last_name }}
                              </a>
                              @endif
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      <i class="fas fa-sign-out-alt"></i>Logout
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>
          <div class="col-lg-2">
              <div class="header__right">
                  <a href="anime-watching.html" style="font-size: 30px; color: rgb(231, 214, 30);">&starf;</a>
                  <a href="#" class="search-switch"><span class="icon_search"></span></a>
              
              </div>
          </div>
      </div>
      <div id="mobile-menu-wrap"></div>
  </div>
</header>



<div class="content-wrapper b-10" style="margin-left: 0;">
  
    @yield('content')

    </div>
    <footer class="main-footer text-center fixed-bottom footer bg-black">
      <div class="page-up">
          <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-lg-3">
                  <div class="footer__logo">
                      <a href="./index.html"><img src="img/logo.png" alt=""></a>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="footer__nav">
                      <ul>
                          <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> @Watch_OP</a>
                          </li>
                          <li><a href="#" class="instagram"><i class="fa fa-instagram"></i> @Watch_OP</a></li>
                          <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> @Watch_OP</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-3">
                  <p class="text-white">Copyright @2024</p>
                </div>
            </div>
        </div>
    </footer>
   
</div>

<!-- jQuery -->
<script src="{{ asset ('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset ('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset ('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset ('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset ('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset ('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset ('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset ('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset ('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset ('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset ('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset ('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('dist/js/adminlte.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function() {
  $('#myTable').DataTable({
    "lengthChange": true, // Disable "Show X entries"
    "paging": true// Disable pagination
  });
});
</script>



@yield('script')

</body>
</html>



  