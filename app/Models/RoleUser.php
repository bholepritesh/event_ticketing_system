<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    public $table = "role_users";

    // use HasFactory;
    protected $fillable = [
        'user_id',
        'role_id'
    ];
}
