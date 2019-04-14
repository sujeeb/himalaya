<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package_include_exclude extends Model
{
    protected $table = 'package_include_exclude';
    $fillable = ['include_detail', 'include_status', 'package_id'];
}
