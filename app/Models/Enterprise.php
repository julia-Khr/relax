<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    public $table = 'enterprises';
    public $fillable = ['name', 'image'];
    public $timestamps = false;
    use HasFactory;

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
