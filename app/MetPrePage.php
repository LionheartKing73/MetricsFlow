<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetPrePage extends Model
{
    protected $table = 'MetPrePageView';

    public $timestamps = false;

    protected $connection = 'metflow';
 }