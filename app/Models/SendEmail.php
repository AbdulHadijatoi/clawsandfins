<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendEmail extends Model
{
    use HasFactory;

    public $fillable = [
        'recipient',
        'subject',
        'message',
        'status',
    ];
}
