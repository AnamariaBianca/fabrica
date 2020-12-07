<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    protected $fillable = ['body','loggable_id','loggable_type'];
    public function loggable()
    {
        return $this->morphTo();
    }
}
