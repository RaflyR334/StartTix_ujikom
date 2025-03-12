@extends('layouts.front')

@section('content')

<!-- Slider Start -->
<section id="home-banner-slider" class="iq-main-slider p-0 iq-rtl-direction swiper banner-home-swiper overflow-hidden" data-swiper="home-banner-slider">
    <div  class="slider m-0 p-0 swiper-wrapper home-slider">
        @foreach ($film as $data)
       <div class="swiper-slide  slide swiper-bg s-bg-1">
          <div class="container-fluid position-relative h-100">
             <div class="slider-inner h-100">
                <div class="row align-items-center  iq-ltr-direction h-100 ">
                   <div class="col-lg-7 col-md-12">
                      <a href="javascript:void(0);">
                         <div class="channel-logo" data-iq-gsap="onStart" data-iq-position-x="-150" data-iq-position-y="0" data-iq-duration="1" data-iq-delay=".4">
                            <img src="{{ asset('front/assets/images/logo.png')}}" class="c-logo" alt="streamit" loading="lazy">
                         </div>
                      </a>
                      <h1 class="slider-text big-title title text-uppercase"  data-iq-gsap="onStart" data-iq-position-x="-150" data-iq-position-y="0" data-iq-duration="1" data-iq-delay=".4">John Wick</h1>
                      <div class="d-flex flex-wrap align-items-center r-mb-23" data-iq-gsap="onStart" data-iq-position-x="-150" data-iq-position-y="0" data-iq-duration="1" data-iq-delay=".4">
                         <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3" >
                         </div>
                         <div class="d-flex align-items-center mt-2 mt-md-3">
                            <span class="badge badge-secondary p-2">NC-17</span>
                            <span class="ml-3">1hrs : 45mins</span>
                         </div>
                         <p data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="150" data-iq-duration="1" data-iq-delay=".5">
                                       Piracy is an act of robbery or criminal violence by ship or boat-borne attackers upon another ship or a coastal area, typically with the goal of stealing cargo and other valuable items or properties.
                         </p>
                      </div>
                      <div class="trending-list" data-wp_object-in="fadeInUp" data-delay-in="1.2">
                         <div class="text-primary title starring">
                            Starring: <span class="text-body"><a href="cast-karen-gilchrist.html">Karen Gilchrist,</a>
                            <a href="#">James Earl Jones</a>
                            </span>
                         </div>
                         <div class="text-primary title genres">
                            Genres: <span class="text-body"><a href="category-action.html">Action</a></span>
                         </div>
                         <div class="text-primary title tag">
                            Tag: <span class="text-body"><a href="tags/action.html">Action,</a><a href="tags/adventure.html">
                            Adventure,</a><a href="tags/horror.html">Horror</a></span>
                         </div>
                      </div>
                      <div class="d-flex align-items-center r-mb-23" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="150" data-iq-duration="1" data-iq-delay=".6">
                         <a href="show-details.html" class="btn btn-hover iq-button"><i class="fa fa-play mr-2"
                            aria-hidden="true"></i>Play Now</a>
                      </div>
                   </div>
                   <div class=" col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block">
                      <a href="video/trailer.mp4" class="video-open playbtn" tabindex="0">
                         <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px"
                            viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                            <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round"
                               stroke-linejoin="round" stroke-miterlimit="10"
                               points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                            <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round"
                               stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                            </circle>
                         </svg>
                         <span class="w-trailor">Watch Trailer</span>
                      </a>
                   </div>
                </div>
             </div>
          </div>
       </div>
       @endforeach
       
       <div class="swiper-slide slide swiper-bg s-bg-2">
          <div class="container-fluid position-relative h-100">
             <div class="slider-inner h-100">
                <div class="row align-items-center  h-100 iq-ltr-direction">
                   <div class="col-lg-7  col-md-12">
                      <a href="javascript:void(0);">
                         <div class="channel-logo" data-iq-gsap="onStart" data-iq-position-x="-150" data-iq-position-y="0" data-iq-duration="1" data-iq-delay=".4">
                            <img src="{{ asset('front/assets/images/logo.png')}}" class="c-logo" alt="streamit" loading="lazy">
                         </div>
                      </a>
                      <h1 class="slider-text big-title title text-uppercase" data-iq-gsap="onStart" data-iq-position-x="-150" data-iq-position-y="0" data-iq-duration="1" data-iq-delay=".4">Sand Dust
                      </h1>
                      <div class="d-flex flex-wrap align-items-center r-mb-23"
                         data-iq-gsap="onStart" data-iq-position-x="-150" data-iq-position-y="0" data-iq-duration="1" data-iq-delay=".4" style="opacity: 1;">
                         <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                            <ul
                               class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                               <li>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star-half" aria-hidden="true"></i>
                               </li>
                            </ul>
                            <span class="text-white ml-2">4.7(lmdb)</span>
                         </div>
                         <div class="d-flex align-items-center mt-2 mt-md-3">
                            <span class="badge badge-secondary p-2">16+</span>
                            <span class="ml-3">2hrs : 40mins</span>
                         </div>
                      </div>
                      <p data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="150" data-iq-duration="1" data-iq-delay=".5">
                         Sand and dust storms (SDS), also known as sirocco, haboob, yellow dust, white storms, and the harmattan, are a natural phenomenon linked with land and water management and climate change.
                      </p>
                      <div class="trending-list" data-wp_object-in="fadeInUp" data-delay-in="1.2">
                         <div class="text-primary title starring">
                            Starring: <span class="text-body"><a href="cast-karen-gilchrist.html">Karen Gilchrist,</a>
                            <a href="#"> James Earl Jones</a>
                            </span>
                         </div>
                         <div class="text-primary title genres">
                            Genres: <span class="text-body"><a href="category-action.html">Action</a></span>
                         </div>
                         <div class="text-primary title tag">
                            Tag: <span class="text-body"><a href="tags/action.html">Action</a><a
                               href="tags/adventure.html">Adventure,</a> <a href="tags/horror.html">
                            Horror
                            </a> </span>
                         </div>
                      </div>
                      <div class="d-flex align-items-center r-mb-23" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="150" data-iq-duration="1" data-iq-delay=".6">
                         <a href="movie-details.html" class="btn btn-hover iq-button"><i class="fa fa-play mr-2"
                            aria-hidden="true"></i>Play Now</a>
                      </div>
                   </div>
                   <div class=" col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block">
                      <a href="video/trailer.mp4" class="video-open playbtn" tabindex="0">
                         <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px"
                            viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                            <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round"
                               stroke-linejoin="round" stroke-miterlimit="10"
                               points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                            <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round"
                               stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                            </circle>
                         </svg>
                         <span class="w-trailor">Watch Trailer</span>
                      </a>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="swiper-slide slide swiper-bg s-bg-3">
          <div class="container-fluid position-relative h-100">
             <div class="slider-inner h-100">
                <div class="row align-items-center  h-100 iq-ltr-direction">
                   <div class="col-lg-7  col-md-12">
                      <a href="javascript:void(0);">
                         <div class="channel-logo" data-iq-gsap="onStart" data-iq-position-x="-150" data-iq-position-y="0" data-iq-duration="1" data-iq-delay=".4">
                            <img src="{{ asset('front/assets/images/logo.png')}}" class="c-logo" alt="streamit" loading="lazy">
                         </div>
                      </a>
                      <h1 class="slider-text big-title title text-uppercase" data-iq-gsap="onStart" data-iq-position-x="-150" data-iq-position-y="0" data-iq-duration="1" data-iq-delay=".4">Shadow
                      </h1>
                      <div class="d-flex flex-wrap align-items-center r-mb-23"
                         data-iq-gsap="onStart" data-iq-position-x="-150" data-iq-position-y="0" data-iq-duration="1" data-iq-delay=".4" style="opacity: 1;">
                         <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                            <ul
                               class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                               <li>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star" aria-hidden="true"></i>
                               </li>
                               <li>
                                  <i class="fa fa-star-half" aria-hidden="true"></i>
                               </li>
                            </ul>
                            <span class="text-white ml-2">4.9(lmdb)</span>
                         </div>
                         <div class="d-flex align-items-center mt-2 mt-md-3">
                            <span class="badge badge-secondary p-2">NC-17</span>
                            <span class="ml-3">1hrs : 58mins</span>
                         </div>
                      </div>
                      <p data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="150" data-iq-duration="1" data-iq-delay=".5">
                         A shadow is a dark (real image) area where light from a light source is blocked by an opaque object. It occupies all of the three-dimensional volume behind an object with light in front of it. A shadow is a dark (real image) area where light from a light source is blocked by an opaque object.
                      </p>
                      <div class="trending-list" data-wp_object-in="fadeInUp" data-delay-in="1.2">
                         <div class="text-primary title starring">
                            Starring: <span class="text-body"><a href="cast-karen-gilchrist.html">Karen Gilchrist, </a>
                            James Earl Jones</span>
                         </div>
                         <div class="text-primary title genres">
                            Genres: <span class="text-body"><a href="category-action.html">Action</a></span>
                         </div>
                         <div class="text-primary title tag">
                            Tag: <span class="text-body"><a href="tags/action.html">Action,</a>
                            <a href="tags/adventure.html">Adventure, </a>
                            <a href="tags/horror.html">Horror </a></span>
                         </div>
                      </div>
                      <div class="d-flex align-items-center r-mb-23" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="150" data-iq-duration="1" data-iq-delay=".5">
                         <a href="movie-details.html" class="btn btn-hover iq-button"><i class="fa fa-play mr-2"
                            aria-hidden="true"></i>Play Now</a>
                      </div>
                   </div>
                   <div class=" col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block">
                      <a href="video/trailer.mp4" class="video-open playbtn" tabindex="0">
                         <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px"
                            viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                            <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round"
                               stroke-linejoin="round" stroke-miterlimit="10"
                               points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                            <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round"
                               stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                            </circle>
                         </svg>
                         <span class="w-trailor">Watch Trailer</span>
                      </a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="swiper-banner-button-prev swiper-nav" id="home-banner-slider-prev">
       <i class="ri-arrow-left-s-line arrow-icon"></i>
    </div>
    <div class="swiper-banner-button-next swiper-nav" id="home-banner-slider-next">
       <i class="ri-arrow-right-s-line arrow-icon"></i>
    </div>
    <div class="swiper-pagination"></div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
       <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
          fill="none" stroke="currentColor">
          <circle r="20" cy="22" cx="22" id="test"></circle>
       </symbol>
    </svg>
 </section>
 <!-- Slider End -->
 <!-- MainContent -->
 <div class="main-content">
    <section id="iq-favorites">
       <div class="container-fluid">
          <div class="row">
             <div class="col-sm-12 overflow-hidden">
                <div class="d-flex align-items-center justify-content-between">
                   <h4 class="main-title">COMING SOON</h4>
                </div>
             </div>
          </div>
          <!-- Swiper -->
          <div class="favourite-slider">
             <div  class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                <ul class="swiper-wrapper p-0 m-0 ">
                    @foreach($film as $item)
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative ">
                         <div class="img-box">
                            <img src="{{ asset('storage/films/' . $item->poster) }}" class="img-fluid" alt="" loading="lazy">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="{{url('film', $item->id)}}">{{ $item->judul }}</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">{{ $item->slug }}</span>
                            </div>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">{{ $item->durasi }}</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="{{url('film', $item->id)}}" role="button" class="btn btn-hover"><i
                                  class="fa fa-play mr-1" aria-hidden="true"></i>
                               Pesan Tiket
                               </a>
                            </div>
                         </div>
                      </div>
                   </li>
                   @endforeach
                </ul>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
             </div>
          </div>
       </div>
    </section>
    <section id="iq-upcoming-movie">
       <div class="container-fluid">
          <div class="row">
             <div class="col-sm-12 overflow-hidden">
                <div class="d-flex align-items-center justify-content-between">
                   <h4 class="main-title">Upcoming Movies</h4>
                   <a href="view-all.html" class="text-primary iq-view-all">View All</a>
                </div>
             </div>
          </div>
          <!-- Swiper -->
          <div class="favourite-slider">
             <div class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                <ul class="swiper-wrapper p-0 m-0">
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative ">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/01.jpg')}}" class="img-fluid" alt="" loading="lazy">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Shadow Warrior</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 50mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover"><i
                                  class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">2+</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative ">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/02.jpg')}}" class="img-fluid" alt="" loading="lazy">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Narnia</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">3hr : 10mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">0</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/03.jpg')}}" class="img-fluid" alt="" loading="lazy">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">X-Men</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 45mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">25+</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/04.jpg')}}" class="img-fluid" alt="" loading="lazy">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Logan</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 22mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">0</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative ">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/01.jpg')}}" class="img-fluid" alt="" loading="lazy">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Shadow Warrior</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 50mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover"><i
                                  class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">2+</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                </ul>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
             </div>
          </div>
       </div>
    </section>
    <section id="iq-suggestede" class="s-margin">
       <div class="container-fluid">
          <div class="row">
             <div class="col-sm-12 overflow-hidden">
                <div class="d-flex align-items-center justify-content-between">
                   <h4 class="main-title">Suggested For You</h4>
                   <a href="view-all.html" class="text-primary iq-view-all">View All</a>
                </div>
             </div>
          </div>
          <!-- Swiper -->
          <div class="favourite-slider">
             <div  class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                <ul class="swiper-wrapper p-0 m-0">
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/03.jpg')}}" class="img-fluid" loading="lazy" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">X-Men</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 45mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">25+</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/04.jpg')}}" class="img-fluid" loading="lazy" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Logan</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 22mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">0</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative ">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/01.jpg')}}" class="img-fluid" loading="lazy" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Shadow Warrior</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 50mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover"><i
                                  class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">2+</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative ">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/02.jpg')}}" loading="lazy" class="img-fluid" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Narnia</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">3hr : 10mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">0</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/05.jpg')}}" loading="lazy" class="img-fluid" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Black Queen</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1h 45mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">0</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative ">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/10.jpg')}}" loading="lazy" class="img-fluid" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Shadow Warrior</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 50mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover"><i
                                  class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">2+</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative ">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/06.jpg')}}" loading="lazy" class="img-fluid" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Narnia</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">3hr : 10mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">0</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/07.jpg')}}"  loading="lazy" class="img-fluid" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">X-Men</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 45mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">25+</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/08.jpg')}}" loading="lazy" class="img-fluid" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Logan</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 22mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">0</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/09.jpg')}}" loading="lazy" class="img-fluid" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Black Queen</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1h 45mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">0</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                </ul>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
             </div>
          </div>
       </div>
    </section>
    <section id="parallex" class="parallax-window">
       <div class="container-fluid h-100">
          <div class="row align-items-center justify-content-center h-100 parallaxt-details">
             <div class="col-xl-5 col-lg-12 col-md-12 r-mb-23">
                <div class="text-left">
                   <a href="javascript:void(0);">
                   <img src="{{ asset('front/assets/images/parallax/parallax-logo.png')}}" loading="lazy" class="img-fluid" alt="bailey">
                   </a>
                   <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                      <ul
                         class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                         <li><a href="javascript:void(0);" class="text-primary"><i class="fa fa-star"
                            aria-hidden="true"></i></a></li>
                         <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                            aria-hidden="true"></i></a></li>
                         <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                            aria-hidden="true"></i></a></li>
                         <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                            aria-hidden="true"></i></a></li>
                         <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star-half-o"
                            aria-hidden="true"></i></a></li>
                      </ul>
                      <span class="text-white ml-3">9.2 (lmdb)</span>
                   </div>
                   <div class="movie-time d-flex align-items-center mb-3 iq-ltr-direction">
                      <div class="badge badge-secondary mr-3">13+</div>
                      <h6 class="text-white">2hr:30mins</h6>
                   </div>
                   <h4 class="iq-title mb-2">
                      Movie of the year
                   </h4>
                   <p class="iq-title-desc mb-5">Baileys Irish Cream is an Irish cream liqueur an alcoholic beverage
                      flavoured with cream, cocoa, and Irish whiskey made by Diageo at Republic of Ireland and in
                      Mallusk, Northern Ireland.
                   </p>
                   <div class="parallax-buttons">
                      <a href="movie-details.html" class="btn btn-hover"><i class="fa fa-play mr-1"
                         aria-hidden="true"></i>Play Now</a>
                   </div>
                </div>
             </div>
             <div class="col-xl-7 col-lg-12 col-md-12 mt-5 mt-xl-0">
                <div class="parallax-img">
                   <a href="movie-details.html">
                   <img src="{{ asset('front/assets/images/parallax/p2.jpg')}}" class="img-fluid w-100" loading="lazy" alt="bailey">
                   </a>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section id="iq-tvthrillers" class="s-margin">
       <div class="container-fluid">
          <div class="row">
             <div class="col-sm-12 overflow-hidden">
                <div class="d-flex align-items-center justify-content-between">
                   <h4 class="main-title">Recommended For You</h4>
                   <a href="view-all.html" class="text-primary iq-view-all">View All</a>
                </div>
             </div>
          </div>
          <!-- Swiper -->
          <div class="favourite-slider">
             <div  class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                <ul class="swiper-wrapper p-0 m-0">
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative ">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/01.jpg')}}" loading="lazy" class="img-fluid" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Shadow Warrior</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 50mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover"><i
                                  class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">2+</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative ">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/02.jpg')}}" loading="lazy" class="img-fluid" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Narnia</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">3hr : 10mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">0</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/04.jpg')}}" loading="lazy" class="img-fluid" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Logan</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 22mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">0</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative ">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/01.jpg')}}" loading="lazy" class="img-fluid" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Shadow Warrior</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 50mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover"><i
                                  class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">2+</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/03.jpg')}}" loading="lazy" class="img-fluid" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">X-Men</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">1hr : 45mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">25+</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide slide-item">
                      <div class="block-images position-relative ">
                         <div class="img-box">
                            <img src="{{ asset('front/assets/images/video/02.jpg')}}" loading="lazy" class="img-fluid" alt="">
                         </div>
                         <div class="block-description">
                            <h6 class="iq-title"><a href="show-detail.html">Narnia</a></h6>
                            <div class="movie-time d-flex align-items-center my-2">
                               <span class="text-white">3hr : 10mins</span>
                            </div>
                            <div class="hover-buttons">
                               <a href="show-detail.html" role="button" class="btn btn-hover">
                               <i class="fa fa-play mr-1" aria-hidden="true"></i>
                               Play Now
                               </a>
                            </div>
                         </div>
                         <div class="block-social-info">
                            <ul class="list-inline p-0 m-0 music-play-lists">
                               <li class="share">
                                  <span><i class="ri-share-fill"></i></span>
                                  <div class="share-box">
                                     <div class="d-flex align-items-center">
                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-facebook-fill"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                           target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                           class="ri-twitter-fill"></i></a>
                                        <a href="#"
                                           data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                           class="share-ico iq-copy-link" tabindex="0"><i
                                           class="ri-links-fill"></i></a>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <span><i class="ri-heart-fill"></i></span>
                                  <span class="count-box">0</span>
                               </li>
                               <li><span><i class="ri-add-line"></i></span></li>
                            </ul>
                         </div>
                      </div>
                   </li>
                </ul>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
             </div>
          </div>
       </div>
    </section>
 </div>


 <div class="rtl-box">
    <button type="button" id="flip" class="btn btn-light rtl-btn">
       <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 20 20" fill="white">
          <path fill-rule="evenodd"
             d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
             clip-rule="evenodd" />
       </svg>
    </button>
    <div class="rtl-panel" id="panel">
       <ul class="modes">
          <li class="dir-btn" data-mode="rtl" data-active="false" data-value="ltr"><a href="#">LTR</a></li>
          <li class="dir-btn" data-mode="rtl" data-active="true" data-value="rtl"><a href="#">RTL</a></li>
       </ul>
    </div>
 </div>
 <!-- MainContent End-->
 <!-- back-to-top -->
 <div id="back-to-top">
    <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
 </div>
 <!-- back-to-top End -->


 @endsection
