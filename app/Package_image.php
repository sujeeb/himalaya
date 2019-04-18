<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package_image extends Model
{
    protected $table = 'package_images';
    protected $fillable = ['image_title', 'image_name', 'image_status', 'package_id'];
}
