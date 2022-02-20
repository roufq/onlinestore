<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
    	
        $kategori = Kategori::get();
        $product = Product::get();
        return view('home', ['kategori'=>$kategori, 'product'=>$product]);
    	// $data['kategori']= Kategori::get();

    	// $categories=Kategori::get();

     //    return view("home", compact('categories'));

     //    $products=Product::get();

     //    return view("product", compact('products'));
    }

    public function search(Request $request)
    {
    	$search = Product::where('nama_barang','like','%'.$request->search."%")->paginate(2);
    	return view('home',['product'=>$search]);
    }

    public $search;

    protected $updateQueryString = ['search'];

    public function render()
    {
        if($this->search) {
            $product = Product::where('nama','like','%'.$this->search.'%');
        }else{

        }
    }
    
}
