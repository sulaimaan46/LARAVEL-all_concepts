<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['id','name','email','address'];

    /** getprofile with respect to author
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getprofile(){

        return $this->hasMany('App\Models\Profile','author_id','id');
    }

    public function book(){

        return $this->belongsToMany('App\Models\book','author_books','author_id','book_id');
    }

}
