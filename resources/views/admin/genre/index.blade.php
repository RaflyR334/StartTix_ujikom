@extends('layouts.admin')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Genre</h4>
<div class="card">
    <div class="card-header">
        <div class="float-start">
            <h5>GENRE</h5>
        </div>
        <div class="float-end">
            <a href="{{route('genre.create')}}" class="btn btn-sm btn-primary">
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
                        <th>Nama Genre</th>
                        <th>Slug</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $i=1; @endphp
                    @foreach ($genre as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->nama_genre}}</td>
                        <td>{{$data->slug}}</td>
                        <td>
                            <form action="{{route('genre.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('genre.edit', $data->id)}}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
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
