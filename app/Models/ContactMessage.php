<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    // Define which fields are fillable to prevent mass assignment vulnerability
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
