<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FullForm extends Model
{
    protected $fillable=['name', 'picture', 'date_of_birth', 'gender', 'hobby', 'skills', 'bio'];
}
