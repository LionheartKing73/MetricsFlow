<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userpagebehaviour extends Model
{
    protected $table = 'userpagebehaviour';

    public $timestamps = false;

    protected $connection = 'raw-data';


}
