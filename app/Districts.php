<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    protected $guarded=[];
    protected $table='districts';
    protected $primaryKey='id';
    protected $fillable=['id', 'province_id','province_name','city_id','city_name','city_type','subdistrict_id','name'];
}
