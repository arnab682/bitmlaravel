<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forums extends Model
{
    //
    protected $fillable=['name', 'picture', 'date_of_birth', 'gender', 'hobby', 'skills', 'bio'];
}
