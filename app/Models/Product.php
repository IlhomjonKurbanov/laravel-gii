<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Product
 */
class Product extends Model {
    protected $table = "products";

    protected $primaryKey = []; 

    protected $fillable = ['root_id', 'category_name', 'category_slug', 'price', 'image', 'name', 'status', 'type', 'created_at', 'updated_at', 'source', 'sku', 'cash_back', 'category_id', 'short_link'];

    
}