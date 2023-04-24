<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name','dayofupload','description','resolution','price','issold','photographer_id'];

    public function photographer()
    {
        return $this->belongsTo(Photographer::class);
    }
}
