<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Speaker extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;
    use HasTranslations;

    public $table = 'speakers';

    protected $appends = [
        'photo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'twitter',
        'facebook',
        'linkedin',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
        'full_description',
    ];

    protected $translatable = ['name', 'description', 'full_description'];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->width(50)->height(50)->nonOptimized();
        $this->addMediaConversion('bigthumb')->width(300)->height(300)->nonOptimized();
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'speaker_id', 'id');
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->bigthumbnail = $file->getUrl('bigthumb');
        }

        return $file;
    }
}
