<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channels extends Model
{
     protected $table = 'leadchannel';
     public $timestamps = false;

     protected $connection = 'raw-data';
}
