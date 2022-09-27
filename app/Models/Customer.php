<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function detail()
    {
        return $this->hasMany('App\Models\DetailCustomer', 'user_id');
    }
}
