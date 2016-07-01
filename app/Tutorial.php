<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    public function category()
    {
      return $this->belongsToMany('App\Category')->withPivot('tutorial_id', 'category_id');
    }

    public function rating()
    {
      return $this->hasMany('App\Rating');
    }

    public function comment()
    {
      return $this->hasMany('App\Comment');
    }
}
