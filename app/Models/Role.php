<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // protected $primaryKey = 'role_id';

    // public function roles()
    // {
    //     return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
    // }
}