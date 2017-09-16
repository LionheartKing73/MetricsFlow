<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'TopConvContent2';

    public $timestamps = false;

    protected $connection = 'raw-data';
}
