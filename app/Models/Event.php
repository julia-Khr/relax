<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $table = 'events';
    public $timestamps = false;
    public $fillable = [
        'name',
        'description',
        'start_date',
        'finish_date',
        'enterprise_id'
    ];
    use HasFactory;
}
