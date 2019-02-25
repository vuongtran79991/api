<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car_colors extends Model
{
    protected $table= 'car_colors';

    protected $fillable=['car_id','colors_id'];
}
