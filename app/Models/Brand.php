<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Brand
 */
class Brand extends Model {
    protected $table = "brands";

    protected $primaryKey = []; 

    protected $fillable = ['name', 'slug', 'description', 'image', 'type', 'status', 'created_at', 'updated_at', 'link'];

    
}