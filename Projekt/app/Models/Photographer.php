<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['firstname','lastname','birthdate','description','howmanysold'];

    protected $attributes = [
        'howmanysold' => 0,
    ];

    public function photo()
    {
        return $this->hasMany(Photo::class);
    }
}
