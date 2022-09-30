<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'state_id'
    ];

    public function country()
    {
        return $this->belongsTo(State::class,'id', 'country_id');
    }
   
    public function cities()
    {
        return $this->hasMany(City::class,'state_id', 'id');
    }
}
