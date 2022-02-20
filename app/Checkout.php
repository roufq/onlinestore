<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table='checkouts';
    protected $primaryKey='id';
    public  $timestamps = false;
    protected $fillable=array('id','keranjang_id','user_id','fullname','waktu_bayar','nama_barang','harga','no_hp','total','metode','ongkir','provinsi','kecamatan','kabupaten','alamat_rumah','status','jumlah','jumlah_harga','bukti_pembayaran');

    public function customer()
    {
        return $this->belongsTo('App\Customer','checkout_id','id');
    }

    public function province()
    {
        return $this->belongsTo('App\Province','id');
    }

    public function city()
    {
        return $this->belongsTo('App\City','id');
    }
}
