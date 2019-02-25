<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class product extends Model
{
    //
    protected $table= 'products';

    protected $fillable=['id','name','price'];

    public $timestamps=false;

    public function images(){
        return $this->hasMany('App\image');
    }
}
