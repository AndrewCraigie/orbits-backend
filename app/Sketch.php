<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sketch extends Model
{

    protected $fillable = [
        'title',
        'description',
        'public',
        'featuredSeries',
        'appSettings',
        'orbitDefs',
        'user_id'
    ];
}
