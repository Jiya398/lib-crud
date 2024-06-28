<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = [
        'publisher_name',
        'publisher_address',
        'publisher_phone'
    ];

    protected $table = 'publishers';
}
