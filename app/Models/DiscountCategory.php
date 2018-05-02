<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class DiscountCategory
 */
class DiscountCategory extends Model {
    protected $table = "discount_categories";

    protected $primaryKey = []; 

    protected $fillable = ['name', 'slug', 'description', 'brand_id', 'type', 'status', 'created_at', 'updated_at', 'discount'];

    
}