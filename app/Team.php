<?php

namespace App;

// use Laravel\Spark\Team as SparkTeam;
use Laravel\Spark\Billable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;


class Team extends Model
{
    use Billable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teams';
}
