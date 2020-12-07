<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class produs extends Model
{
    use SoftDeletes;

    protected $fillable=['denumire_produs','descriere_produs'];


    public function contracteP()
    {
        return $this->belongsToMany(contract::class)->withTimestamps();
    }

    public function logs()
    {
        return $this->morphMany(log::class, 'loggable');
    }
}
