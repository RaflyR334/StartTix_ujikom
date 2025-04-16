@extends('layouts.front')

@section('content')
<h3>Silakan Lakukan Pembayaran</h3>
<p>Transfer ke BCA 123456789 a.n. Bioskop Online</p>
<form method="POST" action="{{ route('pembayaran.update', $pembayaran->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>Upload Bukti Pembayaran:</label>
    <input type="file" name="bukti_bayar" required>
    <button type="submit">Kirim</button>
</form>

@endsection