<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walter extends Model
{
    //
    protected $table= 'walters';

    protected $fillable=['id','monhoc','giatien','giangvien'];

}
