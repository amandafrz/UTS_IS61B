@extends('layouts.master')

@section('title', 'Edit Buku')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Buku</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="/buku/{{$bk->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode Buku</label>
                    <input type="text" value="{{$bk->kd_buku}}" class="form-control" name="kd_buku">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Buku</label>
                    <input type="text" value="{{$bk->nm_buku}}" class="form-control" name="nm_buku">
                </div>
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="text" value="{{$bk->stok}}" class="form-control" name="stok">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" value="{{$bk->harga}}" class="form-control" name="harga">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
