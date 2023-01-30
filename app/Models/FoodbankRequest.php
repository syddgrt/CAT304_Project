<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodBankRequest extends Model
{
    protected $fillable = [
        'name', 'address', 'phone', 'email', 'description', 'status'
    ];
}
