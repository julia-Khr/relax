<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Response extends Model
{
    use HasFactory;

    public $table = 'responses';
    protected $fillable = [
        'author_name',
        'author_avatar_url',
        'text',
        'date',
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
