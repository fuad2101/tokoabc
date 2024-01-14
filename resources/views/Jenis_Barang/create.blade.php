@extends('layout')
@section('halaman','Tambah Barang')
@section('content')
     <form class="form form-inline" action="/jns-barang/create" method="POST">
        @csrf
        <div class=" form-group mx-3">
            <input class="form-control" type="text" placeholder="Jenis" name="jns_brg">
            <input class="form-control" type="text" placeholder="Deskripsi" name="desc" >
        </div>
        <button class="btn btn-primary btn-block mt-4 mx-3" type="submit">Tambah</button>
    </form>

    {{-- <form action="/jns-barang/create" method="POST">
        @csrf
        <input type="text" placeholder="Jenis Barang" name="jns_brg">
        <input type="text" placeholder="deskripsi" name="desc">
        <button type="submit">Submit</button>
    </form> --}}

@endsection
