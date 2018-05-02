<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class TransactionDetail
 */
class TransactionDetail extends Model {
    protected $table = "transaction_details";

    protected $primaryKey = []; 

    protected $fillable = ['offer_id', 'transaction_id', 'product_sku', 'product_category_id', 'product_category', 'product_name', 'product_url', 'conversion_id', 'device_os', 'conversion_publisher_payout', 'conversion_sale_amount', 'created_at', 'updated_at'];

    
}