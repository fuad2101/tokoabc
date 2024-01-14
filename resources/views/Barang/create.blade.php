@extends('layout')
@section('halaman','Tambah Barang')
@section('content')
    <form class="form form-inline" action="/barang/create" method="POST">
        @csrf
        <div class="mx-3">
            <input class="form-control" type="text" placeholder="Nama Barang" name="nama_brg">
            <input class="form-control" type="text" placeholder="Stok" name="stok" >
            <input class="form-control" type="text" placeholder="Jumlah Terjual" name="jml_terjual" >
            <input class="form-control" type="date" placeholder="Tanggal Transaksi" name="tgl_transaksi" >
            <select class="form-control" name="jns_brg" id="">
                <option value="Konsumsi">Konsumsi</option>
                <option value="Pembersih">Pembersih</option>
            </select>
        </div>
        <button class="btn btn-primary btn-block mt-4 mx-3" type="submit">Tambah</button>
    </form>
@endsection
