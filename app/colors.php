<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colors extends Model
{
    protected $table= 'colors';

    protected $fillable=['name'];



    public function car(){
        return $this->belongsToMany('App\car','car_colors');
    }
}
