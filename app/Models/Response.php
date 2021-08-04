<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    public $table = 'responses';
    public $fillable = [
        'author',
        'avatar',
        'text',
        'date',
        'event_id'
    ];
    use HasFactory;
}
