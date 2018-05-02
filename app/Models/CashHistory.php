<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class CashHistory
 */
class CashHistory extends Model {
    protected $table = "cash_histories";

    protected $primaryKey = []; 

    protected $fillable = ['account_id', 'cash', 'transaction_id', 'status', 'type', 'created_at', 'updated_at'];

    
}