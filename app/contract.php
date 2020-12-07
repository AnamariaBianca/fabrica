<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contract extends Model
{
    use SoftDeletes;

    protected $fillable=['denumire_contract','descriere_contract','furnizor_id'];
    

    public function produse()
    {
        return $this->belongsToMany(produs::class)->withTimestamps();
        
    }

    public function furnizor()
    {
        return $this->belongsTo(furnizor::class);
    }

    public function logs()
    {
        return $this->morphMany(log::class, 'loggable');
    }
}
