<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    public $table = 'pictures';

    public $fillable = [
        'name',
        'role_id'
    ];

    public function investor()
    {
        return $this->belongsTo(Investor::class);
    }
    
    public function distributor()
    {
        return $this->belongsTo(Distributor::class);
    }

}
