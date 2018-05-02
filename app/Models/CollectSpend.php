<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class CollectSpend
 */
class CollectSpend extends Model {
    protected $table = "collect_spends";

    protected $primaryKey = []; 

    protected $fillable = ['type', 'account_id', 'from', 'note', 'transfer_type', 'amount', 'balance_before', 'balance_after', 'created_at', 'updated_at', 'collect', 'spend', 'account_name', 'from_name', 'reason', 'code', 'address', 'phone', 'action_date', 'deleted_at', 'reason_delete', 'shop_id', 'warehouse_id', 'fund_id', 'company', 'balance_before_fund', 'balance_after_fund', 'personal_tax', 'source'];

    
}