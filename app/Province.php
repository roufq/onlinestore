<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $guarded=[];
    protected $table='provinces';
    protected $primaryKey='id';

    public function checkout()
    {
        return $this->hasMany('App\Checkout', 'id');
    }
}
