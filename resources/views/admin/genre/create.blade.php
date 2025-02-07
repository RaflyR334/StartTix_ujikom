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
                        <h5>TAMBAH GENRE</h5>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('genre.index') }}" class="btn btn-sm btn-outline-primary">KEMBALI</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('genre.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Genre</label>
                            <input type="text" class="form-control @error('genre') is-invalid @enderror" name="nama_genre"
                            value="{{ old('genre') }}" placeholder="Nama Genre" required>
                            @error('genre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                        </div>
                        <div class="mb-3">
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
