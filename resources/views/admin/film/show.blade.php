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
                    <a href="{{ route('film.show', $film->id)}}">Show Film</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Show Film</div>
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
</div>
@endsection


