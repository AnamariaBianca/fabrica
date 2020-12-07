<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class furnizor extends Model
{
    use SoftDeletes;

    protected $fillable=['denumire_furnizor'];


    public function contracteF()
    {
        return $this->hasMany(contract::class);
    }

    public function logs()
    {
        return $this->morphMany(log::class, 'loggable');
    }
}
