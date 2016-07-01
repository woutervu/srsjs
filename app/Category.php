<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function tutorial()
    {
      return $this->belongsToMany('tutorial');
    }
}
