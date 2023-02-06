<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marker;


class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function foods(){
        return $this->hasMany(Marker::class);
    }
}
