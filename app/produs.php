<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class produs extends Model
{
    use SoftDeletes;

    protected $fillable=['nume_produs','descriere_produs','id_contract','id_furnizor'];


    public function contracteP()
    {
        $this->belongsToMany(Contract::class);
    }
}
