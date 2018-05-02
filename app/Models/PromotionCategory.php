<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class PromotionCategory
 */
class PromotionCategory extends Model {
    protected $table = "promotion_categories";

    protected $primaryKey = []; 

    protected $fillable = ['name', 'slug', 'created_at', 'updated_at'];

    
}