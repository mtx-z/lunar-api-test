<?php

namespace App\Models\Lunar;

use Spatie\MediaLibrary\InteractsWithMedia;

class Brand extends \Lunar\Models\Brand
{
    use InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('image')
            ->singleFile();
    }
}
