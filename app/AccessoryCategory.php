<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccessoryCategory extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'name'      
    ];
    public function accessories(){
        return $this->hasMany('App\Accessory');
    }
   
   
}
