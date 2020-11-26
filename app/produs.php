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
        $this->belongsToMany(Contract::class);
    }
}
