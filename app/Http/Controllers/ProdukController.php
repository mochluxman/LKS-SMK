<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
Use App\Produk;
use App\Kategori;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('produk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* $kategori = DB::table('produks')
        ->join('kategoris', 'kategoris.idKategori', '=', 'produks.idKategori')
        ->select('kategoris.*','produks.*')
        ->get(); */
        $kategori = Kategori::all();
        return view('produk.add',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Produk::create([
            'namaProduk' => $request->namaProduk,
            'idKategori' => $request->idKategori,
            'beratProduk' => $request->beratProduk,
            'tanggalProduksi' => $request->tanggalProduksi,
            'hargaProduk' => $request->hargaProduk,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
