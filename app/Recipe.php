<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function box()
    {
        return $this->belongsTo('App\Box');
    }
}
