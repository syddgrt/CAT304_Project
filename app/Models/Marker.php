<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    use HasFactory;
    protected $fillable = ['latitude','longitude','title','location_id'];

    protected $primaryKey = 'id';

    public function foods(){
        return $this->hasMany(Food::class);
    }
}
