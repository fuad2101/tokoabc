@extends('layout')
@section('AddButton','/barang/create')
@section('halaman','Data Barang')
@section('content')

<div class="container">
@livewire('barangs-table-view')
</div>
@endsection

