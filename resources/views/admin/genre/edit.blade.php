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
                        <h5>EDIT GENRE</h5>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('genre.index') }}" class="btn btn-sm btn-outline-primary">KEMBALI</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('genre.update', $genre->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Genre</label>
                            <input type="text" class="form-control @error('nama_genre') is-invalid @enderror" name="nama_genre"
                                value="{{ old('name', $genre->nama_genre) }}" placeholder="genre" required>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                                value="{{ old('name', $slug->slug) }}" placeholder="slug" required>
                            @error('name')
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
