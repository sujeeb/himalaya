<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package_summary extends Model
{
    protected $table = 'package_summary';
    $fillable = ['summary_title', 'summary_location', 'summary_detail', 'summary_status', 'package_id'];
}
