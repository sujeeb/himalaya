<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package_comment extends Model
{
    protected $table = 'package_comments';
    $fillable = ['user_id', 'package_id', 'user_comment', 'comment_status'];
}
