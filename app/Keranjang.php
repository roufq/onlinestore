<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table='keranjangs';
    protected $primaryKey='id';
    public  $timestamps = false;
    protected $fillable=array('id','product_id','user_id','checkout_id','tanggal','status','jumlah_harga','jumlah');

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
