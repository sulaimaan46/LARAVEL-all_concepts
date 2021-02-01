<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{

    protected $fillable = ['id','book_name','book_title','price'];
}
