<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Account
 */
class Account extends Model {

    protected $table = "accounts";

    protected $primaryKey = []; 

    protected $fillable = ['name', 'username', 'email', 'password', 'phone', 'type', 'status', 'remember_token', 'created_at', 'updated_at', 'facebook_id', 'google_id', 'avatar', 'link_profile', 'cash', 'xu'];

    
}