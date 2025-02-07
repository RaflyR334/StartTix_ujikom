@extends('layouts.admin')
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> User</h4>
<div class="card">
    <div class="card-header">
        <div class="float-start">
            <h5>USER</h5>
        </div>
        <div class="float-end">
            <a href="{{route('user.create')}}" class="btn btn-sm btn-primary">
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
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                        <th>Peran</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $i=1; @endphp
                    @foreach ($user as $data)
                        @if ($loop->first)
                                  <tr>
                        <td>{{ $i++ }}</td>
                        <td></td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->tanggal_lahir }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->isAdmin == 1 ? 'admin' : 'user' }}</td>
                        </tr>
                        @else
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    <form action="{{route('user.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('user.edit', $data->id)}}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->isAdmin == 1 ? 'admin' : 'user' }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#example');
</script>
@endpush
