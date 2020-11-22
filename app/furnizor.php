<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class furnizor extends Model
{
    protected $fillable=['nume_furnizor','id_contract','id_produs'];


    public function contracteF()
    {
        return $this->belongsToMany(contract::class);
    }
}
