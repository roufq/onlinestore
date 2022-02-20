<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Keranjang;
use App\Checkout;
use App\Kategori;
use App\Province;
use App\City;
use App\Districts;
use Auth;
use SweetAlert;
use Carbon\Carbon;
use DB;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $product = Product::where('id',$id)->first();
        return view('pesan.index', compact('product'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cart($id)
    {
        // $query= DB::table('checkout')
        //     ->join('product','product.id','=','checkout.product_id')
        //     ->join('keranjang','keranjang.id','=','checkout.keranjang_id')
        //     ->select('keranjang.id','product.nama_barang','keranjang.jumlah','product.harga','keranjang.jumlah_harga','checkout.ongkir')
        //     ->where('keranjang.id',$id)->first();

        
        // return view('pesan.pesanan', compact('query'));

        // $product = Product::where('id',$id)->first();
        $keranjang = Keranjang::where('id',$id)->first();
        $checkout = Checkout::where('id',$id)->first();
        $provinces = Province::all();
        $subdistricts = Districts::all();

        return view('pesan.pesanan', ['product' => $product, 'keranjang' => $keranjang, 'checkout' => $checkout, 'provinces' => $provinces, 'subdistricts' => $subdistricts]);
    }

    public function listCity($province_id){

        $data = \DB::table('cities')->where('province_id',$province_id)->get();
        return response()->json($data);
    }

    public function listSubdistrict($city_id){
        $list = \DB::table('districts')->where('city_id',$city_id)->get();
        return response()->json($list);
    }

    
    public function pesanan($id)
    {
        $data['keranjang']=Keranjang::find($id);
        return view('pesan.pesanan',$data);
    }

    public function pesan(Request $request, $id)
    {
        $product = Product::where('id',$id)->first();
        $tanggal = Carbon::now();

        //validasi apakah melebihi stok
        if($request->jumlah > $product->stok)
        {
            return redirect('pesan/'.$id);
        }

        //simpan ke database keranjang

        $keranjang = new Keranjang;
        $keranjang->user_id = Auth::user()->id;
        $keranjang->product_id = $product->id;
        $keranjang->tanggal = $tanggal;
        $keranjang->status = 0;
        $keranjang->jumlah = $request->jumlah;
        $keranjang->jumlah_harga = $product->harga*$request->jumlah;
        $keranjang->save();

        //cek keranjang


        //simpan ke database checkout
        // $keranjang_baru = Keranjang::where('user_id', Auth::user()->id)->where('status',0)->first();

        // $checkout = new Checkout;
        // $checkout->product_id = $product->id;
        // $checkout->keranjang_id = $keranjang->id;
        // $checkout->user_id = $keranjang_baru->id;
        // $checkout->jumlah = $request->jumlah;
        // $checkout->jumlah_harga = $product->harga*$request->jumlah;
        // $checkout->save();
        // SweetAlert::success('Product success masuk keranjang, Checkout sekarang', 'Success');

        return redirect()->route('check_out');


    }

    public function check_out(Request $request)
    {
        $query= DB::table('keranjangs')
            ->join('products','products.id','=','keranjangs.product_id')
            ->select('keranjangs.id','products.nama_barang','products.gambar1','keranjangs.jumlah','products.harga','keranjangs.jumlah_harga')
            ->where('keranjangs.user_id', Auth::user()->id)
            ->where('status',0)
            ->get();


        
        return view('pesan.check_out', compact('query'));
    }

    // public function delete($id)
    // {
    //     return "delete";
    // }

    public function konfirmasi(Request $request, $id)
    {
        $query= DB::table('keranjangs')
            ->join('product','product.id','=','keranjang.product_id')
            ->select('keranjang.id','product.nama_barang','product.gambar1','keranjang.jumlah','product.harga','keranjang.jumlah_harga','keranjang.status')
            ->where('keranjang.user_id', Auth::user()->id)
            ->where('status',0)
            ->get();


        $query->status = 1;
        $query->update();

        return redirect('history.index');
    }

    public function update(Request $request, $id)
    {
        $keranjang = Keranjang::find($id);
        $keranjang->jumlah = $request->jumlah;
        $keranjang->jumlah_harga = $request->jumlah_harga;

        $keranjang->update();
        return json_encode(array('status'=>'success'));
    }

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
    // public function show($id)
    // {
    //     $data = Keranjang::findOrFail($id);
    //     return view('edit')->with(['data' => $data]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function read()
    {
        $data = Keranjang::all();
        return view('check_out')->with(['data' => $data]);
    }


    public function show(Request $request, $id)
    {
        $keranjang=  Keranjang::find($id);
        $keranjang->fill($request->all());
        $keranjang->update();
        return redirect('check_out');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update($id, $jumlah)
    // {
    //     $keranjang = Keranjang::find( Input::get('id') );
    //     $product = Product::find($keranjang->product_id);
    //     $keranjang->jumlah = Input::get('jumlah'); 
    //     $keranjang->harga = $product->harga * $keranjang->jumlah;
    //     $keranjang->save();
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keranjang = Keranjang::find($id)->delete();
        return redirect('check_out');
    }

    // public function hapus($semua_id)
    // {
    //     $keranjang = Keranjang::find($semua_id)->delete();
    //     return redirect('check_out');
    // }
}
