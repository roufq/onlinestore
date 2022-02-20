<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Keranjang;
use App\Kategori;
use App\Checkout;
use App\User;
use App\Province;
use Auth;
class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $checkout = Checkout::where('user_id', Auth::user()->id)->get();
        $provinces=Province::all();
        // $checkout->bukti_pembayaran = $request->bukti_pembayaran;
        // $checkout->save();
        return view('history.index', compact('checkout','provinces'));
        // $data['keranjang']=Keranjang::find($id);
        // return view('history.index',$data);
    }

    public function upload(Request $request, $id)
    {
        $nm = $request->bukti_pembayaran;
        $namaFile = $nm->getClientOriginalName();

            $dtUpload = Checkout::find($id);
            $dtUpload->bukti_pembayaran = $namaFile;
            $nm->move(public_path().'/img', $namaFile);
            $dtUpload->update();

            return redirect('history');
    }

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
    public function store(Request $request, $id)
    {
        
        $product = Product::where('id',$id)->first();
        // $checkout = Checkout::get('jumlah');
        $keranjang = Keranjang::get('status');

        $checkout=Checkout::create([
            'user_id' => Auth::user()->id,
            'kategori_id' => $request->input_kategori_id,
            'product_id' => $request->input_product_id,
            'fullname' => $request->fullname,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'alamat_rumah' => $request->alamat_rumah,
            'no_hp' => $request->no_hp,
            'metode' => $request->metode,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->input_harga,
            'ongkir' => $request->input_ongkir,
            'status' => "Not Yet Paid",
            'jumlah' => $request->input_jumlah,
            'jumlah_harga' => $request->input_jumlah_harga,
            'total' => $request->input_total,

        ]);
        
        Keranjang::where('id',$id)->update(['status' => 1]);

        $product->update([
            'stok' => $product->stok - $checkout->jumlah,
        ]);


        // $keranjang = Keranjang::where('id', $id)->first();
        // $keranjang->update([
        //     'status' =>'tada'
        // ]);


        

        // $checkout = Checkout::where('id', $id)->get();
        // foreach ($checkout as $checkout) {
        //     $product = Product::where('id', $checkout->product_id)->first();
        //     $product->stok = $product->stok-$checkout->jumlah;
        //     $product->update(); 
        // }
        return redirect('history');
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
        $data['checkout']= Checkout::find($id);
        return view('history.detail_history',$data);
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
        $checkout=  Checkout::find($id);
        $checkout->fill($request->all());
        $checkout->update();
        return redirect('history');
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
