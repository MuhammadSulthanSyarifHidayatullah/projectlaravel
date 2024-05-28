@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h2>Tambah Barang</h2>
    <form>
        <div class="form-group">
            <label for="namabarang">Nama Barang :</label>
            <input type="text" class="form-control" id="namabarang" placeholder="Masukkan Nama Barang">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" class="form-control" id="jumlah" placeholder="Masukkan Jumlah">
        </div>
        <button type="submit" class="btn btn-success m-3">Tambah</button>
    </form>
</div>
@endsection