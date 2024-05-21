@extends('layouts.master')
@section('title', 'Tambah Data Buku')
@section('judul', 'Tambah Data Buku')
@section('nama', 'Toko Buku')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="/buku/store">
                @csrf
                <div class="form-group">
                    <label for="kd_buku">Kode Buku:</label>
                    <input type="text" class="form-control" id="kd_buku" name="kd_buku">
                    @error('kd_buku')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nm_buku">Nama Buku</label>
                    <input type="text" class="form-control" id="nm_buku" name="nm_buku">
                    @error('nm_buku')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok">
                    @error('stok')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                    @error('harga')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
