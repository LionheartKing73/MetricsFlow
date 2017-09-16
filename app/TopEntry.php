<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopEntry extends Model
{
    protected $table = 'topentry';

    public $timestamps = false;

    protected $connection = 'raw-data';


}
