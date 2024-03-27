<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Statistics extends Model
{
//    use SoftDeletes;

    public $timestamps = false;
    public $table = 'statistics';

    protected $hidden = [
    ];

    protected $dates = [
        'date',
    ];

    protected $fillable = [
        'page',
    ];

}
