<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accessory extends Model
{
    use SoftDeletes;    
    protected $fillable=[
        'accessory_category_id',
        'title',
        'description',
        'gallery'
    ];
    public function accessoryCategory(){
        return $this->belongsTo('App\AccessoryCategory','accessory_category_id');
    }
    
}
