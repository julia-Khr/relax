<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;

    public $table = 'enterprises';
    protected $fillable = ['name', 'image_url'];

    /**
     * @return object
     */
    public function events(): object
    {
        return $this->hasMany(Event::class);
    }
}
