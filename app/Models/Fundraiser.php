<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundraiser extends Model
{
    use HasFactory;

    // Define the table name (in case it differs from the default plural model name)
    protected $table = 'fundraisers_db';

    // Fillable properties for mass assignment
    protected $fillable = [
        'name',
        'email',
        'adhar',
        'cause',
        'reason',
        'maxAmount',
        'days',
        'image_video',
        'message',
    ];

    // Optionally, you can specify the timestamps columns if you're using custom names
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
