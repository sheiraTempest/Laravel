@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Tambah Barang</h1>

    <form action="/gudang/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Barang</label>
            <input type="text" name="id_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jenis Barang</label>
        <input type="text" name="jenis_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Stok Barang</label>
        <input type="text" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <input type="submit" name="submit" class="btn btn-success" value="save">
    </form>
</div>
@endsection

    