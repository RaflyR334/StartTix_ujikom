@extends('layouts.admin')
@section('styles')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        <h5>FILM</h5>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('film.index') }}" class="btn btn-sm btn-outline-primary">KEMBALI</a>
                    </div>
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
                        <div class="mb-2">
                            <label class="form-label">Tahun Rilis</label>
                            <input type="date" class="form-control @error('tahun_rilis') is-invalid @enderror" name="tahun_rilis"
                            value="{{ old('tahun_rilis') }}" required>
                            @error('tahun_rilis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
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
                        <div class="mb-2">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="1" {{old('status')== "coming_soon" ? 'selected' : ''}}>Coming Soon</option>
                                <option value="2" {{old('status')== "playing" ? 'selected' : ''}}>Playing</option>
                                <option value="3" {{old('status')== "ended" ? 'selected' : ''}}>Ended</option>
                            </select>
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
                    <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush
