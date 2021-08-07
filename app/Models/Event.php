<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $table = 'events';
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'finish_date',
        'enterprise_id'
    ];



    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class, 'enterprise_id');
    }

    /**
     * @return object
     */
    public function visitors(): object
    {
        return $this->hasMany(Visitor::class);
    }

    /**
     * @return object
     */
    public function photos(): object
    {
        return $this->hasMany(Photo::class);
    }

    /**
     * @return object
     */
    public function responses(): object
    {
        return $this->hasMany(Response::class);
    }

    /**
     * @return object
     */
    public function things(): object
    {
        return $this->belongsToMany(Thing::class, 'event_things')->withPivot('thing_count');
    }
}
