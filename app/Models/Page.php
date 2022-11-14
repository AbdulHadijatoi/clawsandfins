<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'status',
        // 'is_auth_required',
    ];


    public function investor()
    {
        return $this->hasOne(Investor::class,'user_id', 'id');
    }

}
