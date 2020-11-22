<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    public function produse()
    {
        return $this->hasMany(produs::class);
    }
}
