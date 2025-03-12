@extends('layouts.admin')
@section('styles')
@endsection

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Film</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="{{ url('admin') }}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('film.index')}}">Film</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('film.create')}}">Tambah Film</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Film</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('film.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                                value="{{ old('judul') }}" placeholder="Judul" required>
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                                value="{{ old('slug') }}" placeholder="Slug" required>
                                @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" class="form-control @error('deskripsi') is-invalid @enderror"
                                    name="deskripsi" value="{{ old('deskripsi') }}" rows="3" placeholder="deskripsi"
                                    required></textarea>
                                @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Genre</label>
                                <select name="genre_id" id="" class="form-control">
                                    @foreach ($genre as $item)
                                        <option value="{{$item->id}}">{{ $item->nama_genre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tahun Rilis</label>
                                <input type="date" class="form-control @error('tahun_rilis') is-invalid @enderror" name="tahun_rilis"
                                value="{{ old('tahun_rilis') }}" required>
                                @error('tahun_rilis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Batas Usia</label>
                                <input type="number" class="form-control @error('age_rating') is-invalid @enderror" name="age_rating"
                                    value="{{ old('age_rating') }}" placeholder="Batas Usia" required>
                                @error('age_rating')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                                    value="{{ old('harga') }}" placeholder="Harga" required>
                                @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-control" name="status" id="status" required>
                                    <option value="coming_soon" {{old('status')== "coming_soon" ? 'selected' : ''}}>Coming Soon</option>
                                    <option value="playing" {{old('status')== "playing" ? 'selected' : ''}}>Playing</option>
                                    <option value="ended" {{old('status')== "ended" ? 'selected' : ''}}>Ended</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Durasi</label>
                                <input type="text" class="form-control @error('durasi') is-invalid @enderror" name="durasi"
                                value="{{ old('durasi') }}" placeholder="Durasi" required>
                                @error('durasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Trailer Url</label>
                                <input type="text" class="form-control @error('trailer') is-invalid @enderror" name="trailer"
                                value="{{ old('trailer') }}" placeholder="https://....." required>
                                @error('trailer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Poster</label>
                                <input type="file" class="form-control @error('poster') is-invalid @enderror" name="poster"
                                    value="{{ old('poster') }}" required></input>
                                @error('poster')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('film.index') }}'">BATAL</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush

