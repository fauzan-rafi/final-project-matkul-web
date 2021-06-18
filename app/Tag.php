<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }
}
