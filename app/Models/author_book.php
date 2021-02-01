<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class author_book extends Model
{
    protected $fillable = ['id','name','author_id','book_id'];
}
