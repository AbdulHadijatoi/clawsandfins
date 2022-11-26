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
        'order_email',
        'visiting_address',
        'location_disclose',
        'location_is_correct',
        'latitude',
        'longitude',
        'need_support',
    ];


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'company_name' => 'required',
        'contact_name' => 'required',
        'country' => 'required',
        'city' => 'required',
        'postal_address' => 'required',
        'phone_number' => 'required',
        'website_url' => 'nullable',
        'order_email' => 'nullable',
        'visiting_address' => 'required',
        'want_location_disclose' => 'nullable',
        'location_is_correct' => 'required',
        'need_support' => 'nullable',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    
    public function getCountry()
    {
        return $this->belongsTo(Country::class,'country','id');
    }
    
    public function getCity()
    {
        return $this->belongsTo(City::class,'city','id')->select(['name', 'id']);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

}
