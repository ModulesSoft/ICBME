<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Amenity extends Model
{
    use SoftDeletes;
    use HasTranslations;

    public $table = 'amenities';
    public $translatable = ['name'];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function prices()
    {
        return $this->belongsToMany(Price::class);
    }
}
