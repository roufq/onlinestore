<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='cutomer';
    protected $primaryKey='id';
    public  $timestamps = false;
    protected $fillable=array('id_customer','nama','email','password','no_hp');

    public function checkout()
    {
        return $this->hasMany('App\Checkout','customer_id','id');
    }
}
