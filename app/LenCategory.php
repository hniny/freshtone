<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LenCategory extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'category_name',
        'category_description',
        'parent_category'
    ];
    public function getLenCategoryName($id){
     
        $len=LenCategory::find($id);
        if($len){
            $category_name=$len->category_name;
        }
        else{
            $category_name=$this->category_name;
        }     
        return $category_name;                 
    }
    public function lenItems(){
        return $this->hasMany('App\LenItem','len_category_id');
    }
}
