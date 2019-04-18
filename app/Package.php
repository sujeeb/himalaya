<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';

    protected $fillable = ['package_title', 'package_description', 'package_price', 'status', 'package_title_image', 'package_type'];
}
