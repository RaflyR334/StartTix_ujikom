@extends('layouts.admin')
@section('styles')
@endsection

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">STUDIO</h3>
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
                    <a href="{{ route('studio.index')}}">Studio</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('studio.create')}}">Tambah Studio</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Studio</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('studio.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Bioskop</label>
                                <select name="bioskop_id" id="" class="form-control">
                                    @foreach ($bioskop as $item)
                                        <option value="{{$item->id}}">{{ $item->nama_bioskop }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Studio</label>
                                <input type="text" class="form-control @error('nama_studio') is-invalid @enderror" name="nama_studio"
                                value="{{ old('nama_studio') }}" placeholder="Nama Studio" required>
                                @error('nama_studio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kapasitas</label>
                                <input type="text" class="form-control @error('kapasitas') is-invalid @enderror" name="kapasitas"
                                value="{{ old('kapasitas') }}" placeholder="Kapasitas" required>
                                @error('kapasitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                            </div>
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('studio.index') }}'">BATAL</button>
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


