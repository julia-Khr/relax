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

    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class, 'enterprise_id');
    }
    public function visitors()
    {
        return $this->hasMany(Visitor::class);
    }
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
    public function responses()
    {
        return $this->hasMany(Response::class);
    }
    public function things()
    {
        return $this->belongsToMany(Thing::class, 'event_things')->withPivot('thing_count');
    }
}
