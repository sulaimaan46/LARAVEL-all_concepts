<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Base\Uuid\UuidModel;


class Customer extends Model
{
    use UuidModel;

    protected $fillable=['id','name','email','phone_number','address','status'];

}
