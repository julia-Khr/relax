<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThingCategory extends Model
{
    public $table = 'thing_categories';
    public $fillable = ['name'];
    use HasFactory;
}
