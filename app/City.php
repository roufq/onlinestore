<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded=[];
    protected $table='cityes';
    protected $fillable=['province_id', 'city_id','name'];
    protected $primaryKey='id';

    public function checkout()
    {
        return $this->hasMany('App\Checkout', 'id');
    }
}
