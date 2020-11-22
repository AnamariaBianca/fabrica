<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produs extends Model
{
    protected $fillable=['nume_produs','descriere_produs','id_contract','id_furnizor'];


    public function contracteP()
    {
        $this->belongsToMany(Contract::class);
    }
}
