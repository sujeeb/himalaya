<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_package extends Model
{
    protected $table = 'user_packages';
    $fillable = ['user_id', 'package_id', 'no_of_people', 'total_price'];
}
