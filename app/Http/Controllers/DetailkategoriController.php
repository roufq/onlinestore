<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Kategori;

class DetailkategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $kategori = Kategori::where('id', $id)->first();
        // $product = Product::get();
        // return view('detail_kategori.index', ['kategori'=>$kategori, 'product'=>$product]);
        $kategori = Kategori::where('id', $id)->first();
        $product = Product::where('kategori_id', $id)->get();
        return view('detail_kategori.index', ['kategori' => $kategori, 'product' => $product]);
        // return view('detail_kategori.index', compact('kategori', 'product'));  
    }


    // public function product($kategori_id)
    // {
    //     $product = Product::where('product.kategori_id', $kategori_id);
    //     return $product->get()->result();
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
