<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Category;
Use App\Models\Marker;


class Food extends Model
{
    use HasFactory;

    protected $fillable = ['food_name','food_image','category_id','best_before','food_description'];
    protected $primaryKey = 'id';

    public function category(){
        return $this->belongsTo(Category::class);

        
    }

    public function marker(){
        return $this->belongsTo(Marker::class);
    }

}