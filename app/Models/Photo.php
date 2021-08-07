<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public $table = 'photos';
    protected $fillable = [
        'url',
        'alt',
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
