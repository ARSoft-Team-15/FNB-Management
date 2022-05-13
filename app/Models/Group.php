<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\GroupAccess;

class Group extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function groupAccess()
    {
        return $this->belongsTo(GroupAccess::class);
    }
}
