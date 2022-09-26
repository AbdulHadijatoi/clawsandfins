<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;

    // public $table = 'users';

    public $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'address',
        'size_of_investment',
        'special_skills',
    ];


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'address' => 'required',
        'size_of_investment' => 'required',
        'special_skills' => 'required',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
