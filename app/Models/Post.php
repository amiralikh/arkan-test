<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia as HasMediaAlias;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMediaAlias
{
    use InteractsWithMedia,HasFactory;


    protected $fillable = [
        'title',
        'content',
        'thumbnail',
        'image',
        'user_id'
    ];

    public function registerMediaConversions(Media $media = null) :void
    {
        $this->addMediaConversion('thumbnail')
            ->width(100)
            ->height(100);
        $this->addMediaConversion('image');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
