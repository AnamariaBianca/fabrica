<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    protected $fillable=['descriere_contract','id_produs','id_furnizor'];


    public function produseC()
    {
        return $this->hasMany(produs::class);
    }

    public function furnizoriC()
    {
        return $this->hasOne(furnizor::class);
    }
}
