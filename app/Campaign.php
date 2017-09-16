<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public function portfolio(){
        return $this->belongsTo(Portfolio::Class);
    }
}
