<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthUser extends Model
{
    use HasFactory;

    protected $table = 'auth_db'; // Specify the table name if different from the default

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Additional methods and relationships can be defined here
}
