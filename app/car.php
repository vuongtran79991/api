<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $table= 'cars';

    protected $fillable=['name','price'];

    public function color(){
        return $this->belongsToMany('App\colors','car_colors');
    }
}
