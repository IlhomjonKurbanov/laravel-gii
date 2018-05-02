<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class User
 */
class User extends Model {
    protected $table = "users";

    protected $primaryKey = []; 

    protected $fillable = ['name', 'username', 'email', 'password', 'phone', 'type', 'status', 'created_at', 'updated_at', 'remember_token'];

    
}