<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>StartTix - Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{asset('assets/img/kaiadmin/favicon.ico')}}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{asset('assets/css/fonts.min.css')}}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/kaiadmin.min.css')}}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />
    @yield('styles')

    <!-- Loader Styles -->
    <style>
      /* Loader styles */
      #loading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 1); /* White background */
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: opacity 1s ease, visibility 0s 1s; /* Smooth transition for opacity */
      }

      /* Center the loader icon */
      #loading-center {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      /* Custom "S" logo animation */
      .loader-logo {
        font-size: 50px;
        font-weight: bold;
        color: #007bff; /* You can change the color of the "S" */
        animation: rotateLogo 2s linear infinite;
      }

      /* Animation for rotating the logo */
      @keyframes rotateLogo {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }

      /* Bounce effect for the letter "S" */
      .loader-s {
        font-family: 'Arial', sans-serif;
        color: #007bff; /* Blue color for "S" */
        display: inline-block;
        animation: bounceS 1s infinite;
      }

      /* Bounce effect animation */
      @keyframes bounceS {
        0% {
          transform: translateY(0);
        }
        50% {
          transform: translateY(-20px);
        }
        100% {
          transform: translateY(0);
        }
      }

      /* After the page is loaded, we want to hide the loader */
      #loading.loaded {
        opacity: 0;
        visibility: hidden; /* Remove the loader entirely */
      }
    </style>
  </head>
  <body>
    <!-- Loader Start -->
    <div id="loading">
      <div id="loading-center">
        <!-- "S" Logo Animation -->
        <div class="loader-logo">
          <span class="loader-s">S</span>
        </div>
      </div>
    </div>
    <!-- Loader END -->

    <div class="wrapper">
      <!-- Sidebar -->
      @include('layouts.admin.side')
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="{{asset('assets/img/kaiadmin/logo_light.svg')}}"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          @include('layouts.admin.nav')
          <!-- End Navbar -->
        </div>

        <!-- Content -->
        @yield('content')
        <!-- / end Content -->

        @yield('scripts')
      </div>
    </div>

    <!-- Core JS Files -->
    <script src="{{asset('assets/js/core/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

    <!-- Chart JS -->
    <script src="{{asset('assets/js/plugin/chart.js/chart.min.js')}}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Chart Circle -->
    <script src="{{asset('assets/js/plugin/chart-circle/circles.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{asset('assets/js/plugin/datatables/datatables.min.js')}}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{asset('assets/js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin/jsvectormap/world.js')}}"></script>

    <!-- Sweet Alert -->
    <script src="{{asset('assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{asset('assets/js/kaiadmin.min.js')}}"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="{{asset('assets/js/setting-demo.js')}}"></script>
    <script src="{{asset('assets/js/demo.js')}}"></script>

    <!-- Custom JavaScript to hide loader after content loads -->
    <script>
      // Wait until the window is completely loaded before hiding the loader
      $(window).on('load', function() {
          // Add class 'loaded' to change opacity and visibility, effectively hiding the loader
          $("#loading").addClass('loaded');

          // Fade out the loader completely after a short delay
          setTimeout(function() {
              $("#loading").fadeOut(0); // Immediate fadeout without delay
          }, 300); // Fade out after 300ms delay to ensure the opacity transition is seen
      });
    </script>
  </body>
</html>
