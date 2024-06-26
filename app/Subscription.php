<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    public $table = 'subscriptions';
    protected $fillable = [
        'email',
        'ip',
    ];
}
