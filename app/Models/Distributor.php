<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;

    // public $table = 'users';

    public $fillable = [
        'user_id',
        'company_name',
        'contact_name',
        'country',
        'city',
        'postal_address',
        'phone_number',
        'website_url',
        'adminstration_email',
        'order_email',
        'visiting_address',
        'want_location_disclose',
        'is_location_correct',
        'need_support',
    ];


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'company_name' => 'required',
        'contact_name' => 'required',
        'country' => 'required',
        'city' => 'required',
        'postal_address' => 'required',
        'phone_number' => 'required',
        'website_url' => 'nullable',
        'adminstration_email' => 'required',
        'order_email' => 'nullable',
        'visiting_address' => 'required',
        'want_location_disclose' => 'nullable',
        'is_location_correct' => 'required',
        'need_support' => 'nullable',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
