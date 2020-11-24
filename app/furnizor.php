<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class furnizor extends Model
{
    use SoftDeletes;

    protected $fillable=['nume_furnizor','id_contract','id_produs'];


    public function contracteF()
    {
        return $this->belongsToMany(contract::class);
    }
}
