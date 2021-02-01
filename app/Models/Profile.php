<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['name','title','author_id'];

//    public function author(){
//
//        return $this->belogsTo('App\Models\author');
//    }
    public function author(){

        return $this->belongsToMany('App\Models\author');
    }


}
