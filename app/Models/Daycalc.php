<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daycalc extends Model
{
    protected $table = 'days_calc';

    protected $fillable = ['from_day','to_day','amount','type'];
}
