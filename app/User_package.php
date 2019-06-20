<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_package extends Model
{
    protected $table = 'user_packages';
    public function user() {

        return $this->belongsTo(User::class);
    }
    public function package() {

        return $this->belongsTo(Package::class);
    }
    
}
