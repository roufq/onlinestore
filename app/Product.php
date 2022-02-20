<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $primaryKey='id';
    public  $timestamps = false;
    protected $fillable=array('id','kategori_id','nama_barang','deskripsi','harga','stok','berat','gambar1','gambar2');

    public function keranjang(){ 
    return $this->hasMany('App\Keranjang');
}
}
