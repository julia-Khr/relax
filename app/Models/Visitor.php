<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    public $table = 'visitors';
    public $fillable = [
        'name',
        'email',
        'phone',
        'event_id'
    ];


    /**
     * @return object
     */
    public function event(): object
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
