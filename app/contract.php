<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contract extends Model
{
    use SoftDeletes;

    protected $fillable=['denumire_contract','descriere_contract','denumire_furnizor','denumire_produs'];
    

    public function produse()
    {
        return $this->hasMany(produs::class);
        
    }

    public function furnizor()
    {
        return $this->hasOne(furnizor::class);
    }
}
