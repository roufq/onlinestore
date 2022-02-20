<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table='kategoris';
    protected $primaryKey='id';
    public  $timestamps = false;
    protected $fillable=array('id','nama_kategori','deskripsi_kategori','gambar','gambar_kategori');
}
