@extends('layouts.front')

@section('content')
<!-- MainContent -->
<div class="main-content">
    <div class="show-movie">
       <div class="container-fluid">
          <div class="banner-wrapper overlay-wrapper iq-main-slider" style="background-image: url('{{ asset('storage/'.$film->poster) }}');">
             <div class="banner-caption">
                <div class="row align-items-center">
                   <div class="col-md-9 col-12">
                      <div class="movie-detail">
                         <div class="trending-info p-4">
                            <h1 class="trending-text big-title text-uppercase mt-0">{{ $film->judul }}</h1>
                            <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-content">
                               <li class="trending-list"><a class="text-primary title" href="#">{{ $film->genre->nama_genre }}</a></li>
                            </ul>
                            <div class="d-flex flex-wrap align-items-center text-white text-detail sesson-date">
                               <span class="mr-3">{{ $film->tahun_rilis }}</span>
                            </div>
                            <div class="trending-dec">
                               <p class="m-0">{{ $film->deskripsi }}</p>
                            </div>
                            <div class="mt-3">
                               <a href="#" class="btn btn-danger">Pesan Tiket</a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-3 col-12 text-right">
                      <div class="trailor-video p-3">
                         <a href="{{ $film->trailer }}" class="video-open playbtn block-images position-relative playbtn_thumbnail">
                            <img src="https://img.youtube.com/vi/{{ \Str::after($film->trailer, 'v=') }}/0.jpg" alt="YouTube Thumbnail" class="img-fluid rounded">
                            <span class="content btn btn-transparant iq-button mt-2">
                               <span>Trailer Link</span>
                            </span>
                         </a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-danger font-weight-bold">JADWAL</h2>
    <p class="text-right text-danger">*Schedules are subject to change without prior notice</p>

    <div class="movie-schedule">
        @foreach ($bioskop as $b)
    @if(is_null($bioskop))

    @else

    <h3 class="font-weight-bold">{{ $bioskop->nama_bioskop }}</h3>
    <p>{{ $film->judul }} / {{ $film->genre->nama_genre }} / {{ $film->durasi }} / {{ $film->tahun_rilis }}</p>
    <p><strong>{{ $jadwal->tanggal }}</strong></p>
    <button class="btn btn-dark">{{ $jadwal->jam }}</button>
    <p class="text-right">{{ $studio->nama_studio }}</p>
    @endif
        @endforeach
    </div>
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
@endsection
