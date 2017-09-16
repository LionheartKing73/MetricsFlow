<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeadDNA extends Model
{
    protected $table = 'LeadDNA2';

    public $timestamps = false;

    protected $connection = 'raw-data';


}
