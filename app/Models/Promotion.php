<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Promotion
 */
class Promotion extends Model {
    protected $table = "promotions";

    protected $primaryKey = []; 

    protected $fillable = ['title', 'thumbnail', 'coupon_code', 'category_name', 'content', 'description', 'condition', 'offer_id', 'expired_date', 'started_date', 'promotion_id', 'aff_url', 'original_url', 'category_slug', 'category_id'];

    
}