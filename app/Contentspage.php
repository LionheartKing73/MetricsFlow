<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contentspage extends Model
{
    protected $table = 'contentspage';

    public $timestamps = false;

    protected $connection = 'raw-data';


}
