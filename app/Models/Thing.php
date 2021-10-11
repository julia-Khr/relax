<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    use HasFactory;

    public $table = 'things';
    protected $fillable = [
        'name',
        'thing_category_id'
    ];

    /**
     * @return object
     */
    public function events(): object
    {
        return $this->belongsToMany(Event::class, 'event_things');
    }

    /**
     * @return object
     */
    public function thing_category(): object
    {
        return $this->belongsTo(ThingCategory::class, 'thing_category_id');
    }
}
