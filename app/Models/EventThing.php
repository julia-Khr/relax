<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventThing extends Model
{
    use HasFactory;

    public $table = 'event_things';
    protected $fillable = [
        'event_id',
        'thing_id',
        'thing_count'
    ];
}
