<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventThing extends Model
{
    public $table = 'event_things';
    public $fillable = [
        'event_id',
        'thing_id',
        'thing_count'
    ];
    use HasFactory;
}
