<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Price extends Model
{
    use SoftDeletes;
    use HasTranslations;

    public $table = 'prices';
    public $translatable = ['name', 'price'];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }
}
