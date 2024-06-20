<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LenItem extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'len_category_id',
        'item_name',
        'price',
        'description',
        'item_image',       
    ];
    public function lenCategory(){
        return $this->belongsTo('App\LenCategory','len_category_id','id');
    }
}
