<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetUsers extends Model
{
    protected $table = 'MetUsers';

    public $timestamps = false;

    protected $connection = 'metflow';
}
