<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public function movie()
    {
        return $this->belongsTo('App\Movie', 'movie_id');
    }
}
