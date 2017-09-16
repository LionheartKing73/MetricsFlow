<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentStage extends Model
{
    protected $table = 'contentstages';

    public $timestamps = false;

    protected $connection = 'raw-data';


}
