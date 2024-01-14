<?php

namespace App\Http\Controllers;

use App\Models\jns_barang;
use App\Http\Requests\Storejns_barangRequest;
use App\Http\Requests\Updatejns_barangRequest;
use Illuminate\Support\Facades\Redirect;

class JnsBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisBarangs = jns_barang::all();
        return view('Jenis_Barang.index',['jenisBarangs'=>$jenisBarangs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jenis_Barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storejns_barangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storejns_barangRequest $request)
    {
        $validated = ['jns_brg'=>$request->jns_brg,'desc'=>$request->desc];
        jns_barang::create($validated);

        redirect('/jns-barang');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jns_barang  $jns_barang
     * @return \Illuminate\Http\Response
     */
    public function show(jns_barang $jns_barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jns_barang  $jns_barang
     * @return \Illuminate\Http\Response
     */
    public function edit(jns_barang $jns_barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatejns_barangRequest  $request
     * @param  \App\Models\jns_barang  $jns_barang
     * @return \Illuminate\Http\Response
     */
    public function update(Updatejns_barangRequest $request, jns_barang $jns_barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jns_barang  $jns_barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(jns_barang $jns_barang)
    {
        //
    }
}
