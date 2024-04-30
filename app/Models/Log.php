<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['request', 'response', 'url', 'method', 'user_agent'];

    // Cast the 'request' attribute to JSON
    protected $casts = [
        'request' => 'json',
    ];
}


