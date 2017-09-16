<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversions extends Model
{
    protected $table = 'conversionpage';

    public $timestamps = false;

    protected $connection = 'raw-data';
}
