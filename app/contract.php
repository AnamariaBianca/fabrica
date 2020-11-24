<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    
    protected $fillable=['denumire_contract','descriere_contract'];


    public function produseC()
    {
        return $this->hasMany(produs::class);
    }

    public function furnizoriC()
    {
        return $this->hasOne(furnizor::class);
    }
}
