<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public $table = 'photos';
    public $fillable = [
        'name',
        'event_id'
    ];

    use HasFactory;
    public function event()
    {
        $this->belongsTo(Event::class, 'event_id');
    }
}
