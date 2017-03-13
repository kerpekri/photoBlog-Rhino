<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $fillable = ['first_name','last_name'];
}
