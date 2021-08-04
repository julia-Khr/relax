<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    public $table = 'visitors';
    public $fillable = [
        'name',
        'email',
        'phone',
        'event_id'
    ];

    use HasFactory;

    public function event(){
        return $this->belongsTo(Event::class, 'event_id');
    }
}
