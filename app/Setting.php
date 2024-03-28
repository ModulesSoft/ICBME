<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use SoftDeletes;
    use HasTranslations;

    public $table = 'settings';
    public $translatable = ['value'];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'key',
        'value',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
