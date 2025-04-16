@extends('layouts.front')

@section('content')
<!-- MainContent -->
<div class="main-content">
    <div class="show-movie">
        <div class="container-fluid">
            <div class="banner-wrapper overlay-wrapper iq-main-slider" style="background-image: url('{{ asset('storage/films/'.$film->poster) }}');">
                <div class="banner-caption">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-12">
                            <div class="movie-detail"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="movie-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-12">
                    <div class="movie-details-content">
                        <div class="trending-info p-4">
                            <h1 class="trending-text big-title text-uppercase mt-0" style="font-size: 3rem;">{{ $film->judul }}</h1>
                        </div>
                        <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-content">
                            <li class="trending-list"><a class="text-primary title" href="#" style="font-size: 1.5rem;">{{ $film->genre->nama_genre }}</a></li>
                        </ul>
                        <div class="d-flex flex-wrap align-items-center text-white text-detail sesson-date">
                            <span class="mt-3" style="font-size: 1.25rem;">{{ $film->tahun_rilis }}</span>
                        </div>
                        <div class="trending-dec">
                            <p class="m-0" style="font-size: 1.25rem;">{{ $film->deskripsi }}</p>
                        </div>

                        <!-- Pilihan Jadwal -->
                        <div class="mt-5">
                            <h4 class="mb-3">Pilih Jadwal Tersedia:</h4>
                            @foreach($film->jadwal as $j)
                                <div class="border p-3 mb-2">
                                    <p><strong>Tanggal:</strong> {{ $j->tanggal }}</p>
                                    <p><strong>Jam:</strong> {{ $j->jam }}</p>
                                    <p><strong>Bioskop:</strong> {{ $j->bioskop->nama_bioskop }}</p>
                                    <p><strong>Studio:</strong> {{ $j->studio->nama_studio }}</p>
                                    <a href="{{ route('pemesanan.create', ['jadwal_id' => $j->id]) }}" class="btn btn-success">
                                        Pesan Tiket untuk Jadwal Ini
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-12 text-right">
                    <div class="trailor-video p-3">
                        <a href="{{ $film->trailer }}" class="video-open playbtn block-images position-relative playbtn_thumbnail">
                            <img src="https://img.youtube.com/vi/{{ \Str::after($film->trailer, 'v=') }}/0.jpg" alt="YouTube Thumbnail" class="img-fluid rounded" style="width: 100%; height: auto; max-width: 100%; max-height: 350px;">
                            <span class="content btn btn-transparant iq-button mt-2" style="font-size: 1.25rem;">
                                <span>Trailer Link</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rtl-box">
    <button type="button" id="flip" class="btn btn-light rtl-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 20 20" fill="white">
            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
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
