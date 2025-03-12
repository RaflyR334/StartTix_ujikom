<!doctype html>
<html lang="en-US">
   <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>StartTix Register Page</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.ico')}}"/>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css')}}"/>
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('front/assets/css/typography.css')}}">
      <!-- Style -->
      <link rel="stylesheet" href="{{ asset('front/assets/css/style.css')}}"/>
      <!-- Responsive -->
      <link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css')}}"/>
      <style>
        /* background image the sign-in page */
        .sign-in-page {
           background-image: url('{{ asset('front/assets/images/background.jpg') }}');
           background-size: cover;
           background-position: center;
           height: 100vh; /* Full viewport height */
           display: flex;
           justify-content: center;
           align-items: center;
        }

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
   <!-- MainContent -->
   <div class="sign-in-page">
      <div class="container">
         <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-lg-7 col-md-12 align-self-center">
               <div class="sign-user_card ">
                  <div class="sign-in-page-data">
                     <div class="sign-in-from w-100 m-auto">
                        <form class="" id="formAuthentication" action="{{route('register')}}" method="POST">
                            @csrf
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control mb-0 @error('name') is-invalid @enderror" id="exampleInputEmail23" name="name" placeholder="Enter Username" autocomplete="off">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control mb-0 @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email" autocomplete="off">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                   <label>Password</label>
                                   <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror" id="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                                   @error('password')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                   <label>Date of Birth</label>
                                   <input type="date" class="form-control mb-0 @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir">
                                </div>
                             </div>
                           </div>
                           </div>
                           <button type="submit" class="btn btn-hover my-2">Sign Up</button>

                        </form>
                     </div>
                  </div>
                  <div class="mt-3">
                     <div class="d-flex justify-content-center links">
                        Already have an account? <a href="{{route('login')}}" class="text-primary ml-2">Sign In</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="rtl-box">
      <button type="button" class="btn btn-light rtl-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 20 20" fill="white">
            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
            </svg>
      </button>
      <div class="rtl-panel">
         <ul class="modes">
            <li class="dir-btn" data-mode="rtl" data-active="false"   data-value="ltr"><a href="#">LTR</a></li>
            <li class="dir-btn" data-mode="rtl" data-active="true"   data-value="rtl"><a href="#">RTL</a></li>
         </ul>
      </div>
   </div>
   <!-- MainContent End-->
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
   <!-- rtl -->
   <script src="{{ asset('front/assets/js/rtl.js')}}"></script>

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
