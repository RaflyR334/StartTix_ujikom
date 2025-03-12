@extends('layouts.admin')
@section('styles')
@endsection

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">KURSI</h3>
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
                    <a href="{{ route('kursi.index')}}">Kursi</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kursi.create')}}">Tambah Kursi</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Kursi</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kursi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">No Kursi</label>
                                <input type="text" class="form-control @error('no_kursi') is-invalid @enderror" name="no_kursi"
                                value="{{ old('no_kursi') }}" placeholder="No Kursi" required>
                                @error('no_kursi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tipe Kursi</label>
                                <select class="form-control" name="tipe_kursi" id="tipe_kursi" required>
                                    <option value="reguler" {{old('tipe_kursi')== "reguler" ? 'selected' : ''}}>Reguler</option>
                                    <option value="vip" {{old('tipe_kursi')== "vip" ? 'selected' : ''}}>VIP</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status Kursi</label>
                                <select class="form-control" name="status_kursi" id="status_kursi" required>
                                    <option value="kosong" {{old('status_kursi')== "kosong" ? 'selected' : ''}}>Kosong</option>
                                    <option value="dipesan" {{old('status_kursi')== "vip" ? 'selected' : ''}}>Dipesan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('kursi.index') }}'">BATAL</button>
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


