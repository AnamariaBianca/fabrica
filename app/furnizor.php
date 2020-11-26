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
        return $this->belongsToMany(contract::class);
    }
}
