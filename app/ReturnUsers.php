<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnUsers extends Model
{
	protected $table = 'returningusers';

    public $timestamps = false;

    protected $connection = 'raw-data';
}
