<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    use HasFactory;
    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_things')->withPivot('thing_count');
    }
    public function thing_category()
    {
        return $this->belongsTo(ThingCategory::class, 'thing_category_id');
    }
}
