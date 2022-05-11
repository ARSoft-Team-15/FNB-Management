<?php

namespace App\Models\UserManagement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class d_user extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = [
        'password_user',
    ];
}
