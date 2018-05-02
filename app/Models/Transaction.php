<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Transaction
 */
class Transaction extends Model {
    protected $table = "transactions";

    protected $primaryKey = []; 

    protected $fillable = ['transaction_id', 'offer_id', 'account_id', 'conversion_count', 'order_value', 'publisher_payout', 'created_at', 'updated_at', 'status'];

    
}