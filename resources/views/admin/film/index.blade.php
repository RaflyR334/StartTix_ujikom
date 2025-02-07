@extends('layouts.admin')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Film</h4>
<div class="card">
    <div class="card-header">
        <div class="float-start">
            <h5>FILM</h5>
        </div>
        <div class="float-end">
            <a href="{{route('film.create')}}" class="btn btn-sm btn-primary">
                <i class="fas fa-plus"></i>
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table" id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Judul</th>
                        <th>Slug</th>
                        <th>Deskripsi</th>
                        <th>Genre</th>
                        <th>Tahun Rilis</th>
                        <th>Durasi</th>
                        <th>Batas Usia</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Poster</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $i=1; @endphp
                    @foreach ($film as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>
                            <form action="{{route('film.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('film.show', $data->id)}}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{route('film.edit', $data->id)}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                        <td>{{$data->judul}}</td>
                        <td>{{$data->slug}}</td>
                        <td>{{$data->deskripsi}}</td>
                        <td>{{$data->genre->nama_genre}}</td>
                        <td>{{$data->tahun_rilis}}</td>
                        <td>{{$data->durasi}}</td>
                        <td>{{$data->age_rating}}</td>
                        <td>{{$data->harga}}</td>
                        <td>
                            @switch($data->status)
                                @case('coming_soon')
                                    Coming Soon
                                    @break
                                @case('playing')
                                    Playing
                                    @break
                                @case('ended')
                                    Ended
                            @endswitch
                        </td>
                        <td>
                            <img src="{{ asset('/storage/films/' . $data->poster) }}" class="rounded"
                                style="width: 150px">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush
