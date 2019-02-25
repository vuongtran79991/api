<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  App\Review;
class Product extends Model
{
   protected $table= 'a_p_i_s';
    public function reviews(){

        return $this->hasMany(Review::class);
    }
}
