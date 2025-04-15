<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    /** @use HasFactory<\Database\Factories\ACLRoleUserFactory> */
    use HasFactory;

    protected $fillable = ['role_id', 'user_id'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
