<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\API;
class Review extends Model
{
    public function product(){
        return $this->belongsTo(API::class);
    }
}
