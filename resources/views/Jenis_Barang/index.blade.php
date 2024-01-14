@extends('layout')

@section('content')
@section('AddButton','/jns-barang/create')
@section('halaman','Jenis Barang')

<div class="mx-3">
    @livewire('jns-brg-table-view')
</div>



    {{-- <table class="table table-bordered table-responsive-*">
    <thead class="thead-inverse">
        <tr>
            <th>Jenis Barang</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
        <tbody>
            @foreach ($jenisBarangs as $jenisbarang)
        <tr>
            <td>{{$jenisbarang->jns_brg}}</td>
            <td>{{$jenisbarang->desc}}</td>
            <td><a class="btn btn-inline btn-primary">Edit</a><a class="btn btn-inline btn-danger mx-1">Hapus</a><a class="btn btn-inline btn-warning">Detail</a> </td>
        </tr>
    @endforeach
        </tbody>
    </table> --}}


@endsection
