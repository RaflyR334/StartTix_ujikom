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
                        {{ __('FILM') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('film.index') }}" class="btn btn-sm btn-outline-primary">KEMBALI</a>
                    </div>
                </div>

                <div class="card-body">
                    <img src="{{ asset('storage/films/' . $film->poster) }}" class="w-100 rounded">
                    <hr>
                    <h4>{{ $film->judul }}</h4>
                    <p class="tmt-3">
                        {!! $film->slug !!}
                    </p>
                    <p class="tmt-3">
                        {!! $film->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
