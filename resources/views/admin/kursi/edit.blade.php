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
                        <h5>EDIT KURSI</h5>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('kursi.index') }}" class="btn btn-sm btn-outline-primary">KEMBALI</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('kursi.update', $kursi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">No Kursi</label>
                            <input type="text" class="form-control @error('no_kursi') is-invalid @enderror" name="no_kursi"
                                value="{{ old('name', $genre->no_kursi) }}" placeholder="genre" required>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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
