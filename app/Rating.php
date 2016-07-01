<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function tutorial()
    {
      return $this->belongsToMany('App\Tutorial');
    }
}
