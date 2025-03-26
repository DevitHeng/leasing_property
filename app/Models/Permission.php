<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'module', 'remark', 'is_exist', 'maker', 'delby',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}
