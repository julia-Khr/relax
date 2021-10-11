<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThingCategory extends Model
{
    use HasFactory;

    public $table = 'thing_categories';
    protected $fillable = ['name', 'thing_img_url'];

    /**
     * @return object
     */
    public function things(): object
    {
        return $this->hasMany(Thing::class);
    }
}
