<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillingInformation extends Model
{
    protected $table = 'billing_information';
    public function user() {

        return $this->belongsTo(User::class);
    }
}
