@extends('layouts.front')

@section('content')
<!-- MainContent -->
<div class="iq-breadcrumb-one  iq-bg-over " style="background-image: url(images/video/bg.jpg);">
    <div class="container-fluid">
       <div class="row align-items-center">
          <div class="col-sm-12">
             <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                <h2 class="title">View All</h2>
                <ol class="breadcrumb main-bg">
                   <li class="breadcrumb-item"><a href="{{ url('')}}">Home</a></li>
                   <li class="breadcrumb-item active">Movie</li>
                </ol>
             </nav>
          </div>
       </div>
    </div>
 </div>
 <main id="main" class="site-main watchlist-contens">
    <div class="container-fluid">
       <div class="iq-main-header d-flex align-items-center justify-content-between mt-5 mt-lg-0">
          <h4 class="main-title">ALL FILM</h4>
       </div>
       <ul class=" row list-inline  mb-0 iq-rtl-direction ">
          @foreach ($film as $item)
          <li class="slide-item col-lg-3 col-md-4 col-6 mb-4">
             <div class="block-images position-relative  watchlist-first">
                <div class="img-box">
                   <img src="{{ asset('storage/films/' . $item->poster) }}" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="block-description">
                   <h6 class="iq-title text-left"><a href="{{url('film', $item->id)}}">{{$item->judul}}</a></h6>
                   <div class="movie-time d-flex align-items-center my-2">
                      <span class="text-white">{{$item->durasi}}</span>
                   </div>
                   <div class="hover-buttons text-left">
                      <a href="{{url('film', $item->id)}}" role="button" class="btn btn-hover"><i class="fa fa-play mr-1"
                            aria-hidden="true"></i>
                         Beli Tiket</a>
                   </div>
                </div>
             </div>
          </li>
          @endforeach
       </ul>
       {{-- <button class="btn btn-hover hide-me" type="button" data-toggle="collapse" data-target="#collapseExample3"
          aria-expanded="false" aria-controls="collapseExample3">
          <span class="genres-btn">LOAD MORE</span>
       </button> --}}
    </div>
 </main>
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
@endsection
