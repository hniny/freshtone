<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MultipleImage extends Model
{   
    use SoftDeletes;
    protected $fillable = ['title','image'];
}
