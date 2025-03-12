<!doctype html>
<html lang="en-US">
   <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>StartTix</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.ico')}}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css')}}" />
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('front/assets/css/typography.css')}}">
      <!-- Style -->
      <link rel="stylesheet" href="{{ asset('front/assets/css/style.css')}}" />
      <!-- Responsive -->
      <link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css')}}" />
      <!-- swiper -->
      <link rel="stylesheet" href="{{ asset('front/assets/css/swiper.min.css')}}">
      <link rel="stylesheet" href="{{ asset('front/assets/css/swiper.css')}}">

      <style>


        /* Loader styles */
        #loadingjh {
           position: fixed;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           background-color: rgb(0, 0, 0); /* White background */
           z-index: 9999;
           display: flex;
           justify-content: center;
           align-items: center;
           transition: opacity 1s ease-in-out, visibility 0s 1s; /* Adjusted transition for smoother visibility */
        }

        /* Center the loader icon */
        #loadingjh-centerjh {
           display: flex;
           justify-content: center;
           align-items: center;
        }

        /* Custom "S" logo animation */
        .loader-logojh {
           font-size: 50px;
           font-weight: bold;
           color: red; /* You can change the color of the "S" */
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
        .loader-sjh {
           font-family: 'Arial', sans-serif;
           color: red; /* Red color for "S" */
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
        #loadingjh.loaded {
           opacity: 0;
           visibility: hidden; /* Remove the loader entirely */
        }
     </style>
   </head>
   <body>
      <!-- Loader Start -->
    <div id="loadingjh">
        <div id="loadingjh-centerjh">
          <!-- "S" Logo Animation -->
          <div class="loader-logojh">
            <span class="loader-sjh">S</span>
          </div>
        </div>
      </div>
      <!-- Loader END -->
      @include('layouts.front.nav')
      <!-- Header End -->

      <main>
        @yield('content')
      </main>

      <!-- Footer -->
      @include('layouts.front.footer')
      <!-- Footer End -->

      <!-- jQuery, Popper JS -->
      <script src="{{ asset('front/assets/js/jquery-3.5.1.min.js')}}"></script>
      <script src="{{ asset('front/assets/js/popper.min.js')}}"></script>
      <!-- Bootstrap JS -->
      <script src="{{ asset('front/assets/js/bootstrap.min.js')}}"></script>
      <!-- owl carousel Js -->
      <script src="{{ asset('front/assets/js/owl.carousel.min.js')}}"></script>
      <!-- select2 Js -->
      <script src="{{ asset('front/assets/js/select2.min.js')}}"></script>
      <!-- Magnific Popup-->
      <script src="{{ asset('front/assets/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Custom JS-->
      <script src="{{ asset('front/assets/js/custom.js')}}"></script>
      <script src="{{ asset('front/assets/js/rtl.js')}}"></script>
      <!-- gsap JS -->
      <script src="{{ asset('front/assets/plugin/gsap/gsap.min.js')}}"></script>
      <script src="{{ asset('front/assets/js/gsap-scripts.js')}}"></script>
      <!-- Swiper JS -->
      <script src="{{ asset('front/assets/js/swiper.min.js')}}"></script>
      <script src="{{ asset('front/assets/js/swiper.js')}}"></script>

      <!-- Custom JavaScript to hide loader after content loads -->
   <script>
    // Wait until the window is completely loaded before hiding the loader
    $(window).on('load', function() {
        // Add class 'loaded' to change opacity and visibility, effectively hiding the loader
        $("#loadingjh").addClass('loaded');

        // Fade out the loader completely after a short delay
        setTimeout(function() {
            $("#loadingjh").fadeOut(0); // Immediate fadeout without delay
        }, 300); // Fade out after 300ms delay to ensure the opacity transition is seen
    });
  </script>
   </body>
</html>

