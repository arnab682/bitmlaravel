<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable=['title','image','caption','link','is_active'];
}

