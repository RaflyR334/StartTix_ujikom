@extends('layouts.front')

@section('content')
<!-- Hero atau Header -->
<div class="iq-breadcrumb-one iq-bg-over iq-over-dark-50" style="background-image: url(images/about-us/01.jpg);">
    <div class="container-fluid">
       <div class="row align-items-center">
          <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                   <h2 class="title">{{ $jadwal->film->judul }}</h2>
                   <ol class="breadcrumb main-bg justify-content-center">
                      <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                      <li class="breadcrumb-item active">Pemesanan</li>
                   </ol>
                </nav>
          </div>
       </div>
    </div>
</div>

<!-- Main container -->
<main id="main" class="site-main">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="bg-dark text-white p-5 rounded shadow-lg">
                    <div class="text-center mb-4">
                        <h2 class="text-uppercase fw-bold">{{ $jadwal->film->judul }}</h2>
                        <p class="mb-1 fs-5">🎬 <strong>{{ $jadwal->studio->nama_studio }}</strong></p>
                        <p class="fs-6">
                            📅 <strong>{{ \Carbon\Carbon::parse($jadwal->tanggal)->translatedFormat('l, d F Y') }}</strong>
                            &nbsp;|&nbsp;
                            ⏰ <strong>{{ $jadwal->jam }}</strong>
                        </p>
                    </div>

                    <form method="POST" action="{{ route('pemesanan.store') }}">
                        @csrf
                        <input type="hidden" name="jadwal_id" value="{{ $jadwal->id }}">

                        <div class="form-group mb-4">
                            <label for="nama_pemesan" class="form-label text-white fs-5">🧑 Nama Pemesan</label>
                            <input type="text" class="form-control form-control-lg" name="nama_pemesan" id="nama_pemesan" placeholder="Masukkan nama lengkap" required>
                        </div>

                        <div class="mb-4">
                            <h5 class="text-white mb-3">🎟️ Pilih Kursi:</h5>
                            <div class="bg-light p-3 rounded">
                                <div class="row gx-2 gy-2">
                                    @foreach ($jadwal->studio->kursi as $k)
                                        <div class="col-3 col-sm-2 col-md-2 text-center">
                                            <div class="form-check seat-box
                                                {{ in_array($k->id, $kursiTerpesan) ? 'bg-danger text-white disabled' : 'bg-success text-white' }}">
                                                <input
                                                    class="form-check-input d-none"
                                                    type="checkbox"
                                                    name="kursis[]"
                                                    value="{{ $k->id }}"
                                                    id="kursi{{ $k->id }}"
                                                    {{ in_array($k->id, $kursiTerpesan) ? 'disabled' : '' }}>
                                                <label class="form-check-label seat-label py-2 px-3 rounded d-block" for="kursi{{ $k->id }}">
                                                    {{ $k->no_kursi }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="mt-3 d-flex justify-content-center gap-4">
                                    <span class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success px-3">&nbsp;</span>
                                        <span class="text-dark fw-semibold">Tersedia</span>
                                    </span>
                                    <span class="d-flex align-items-center gap-2">
                                        <span class="badge bg-danger px-3">&nbsp;</span>
                                        <span class="text-dark fw-semibold">Terisi</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-danger w-100 py-3 fs-5 mt-3">
                            Lanjutkan Pemesanan
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>

<style>
    .seat-box {
        cursor: pointer;
        border-radius: 0.5rem;
        transition: 0.3s ease;
    }

    .seat-box:hover {
        opacity: 0.8;
    }

    .seat-label {
        font-weight: bold;
    }

    .seat-box input:checked + .seat-label {
        background-color: #ffc107 !important;
        color: #000 !important;
    }

    .disabled {
        pointer-events: none;
        opacity: 0.6;
    }
</style>
@endsection
