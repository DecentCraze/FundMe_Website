<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthDb extends Model
{
    use HasFactory;

    protected $table = 'auth_db'; // Specify the table name

    protected $fillable = [
        'username', // Add your actual column names
        'email',
        'password',
        // Add other fields as necessary
   
    ];

    protected $hidden = [
        'password',
    ];
}