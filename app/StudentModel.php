<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table= 'students';

    protected $fillable=['name','toan','ly','hoa'];

    public $timestamps=false;
}
