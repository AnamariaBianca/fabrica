<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contract extends Model
{
    use SoftDeletes;

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
