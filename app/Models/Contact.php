<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // define fillable columns
    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'address'
    ];
}
