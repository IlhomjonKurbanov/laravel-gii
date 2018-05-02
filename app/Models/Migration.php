<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Migration
 */
class Migration extends Model {
    protected $table = "migrations";

    protected $primaryKey = []; 

    protected $fillable = ['migration', 'batch'];

    
}