<?php

namespace App\Models\Lunar;

use Spatie\MediaLibrary\InteractsWithMedia;

class Collection extends \Lunar\Models\Collection
{
    use InteractsWithMedia;

    /** @noinspection PhpUnused */
    public function registerMediaCollections(): void
    {
        $fallbackUrl = config('lunar.media.fallback.url');
        $fallbackPath = config('lunar.media.fallback.path');

        $collection = $this->addMediaCollection('images')->singleFile();

        if ($fallbackUrl) {
            $collection = $collection->useFallbackUrl($fallbackUrl);
        }

        if ($fallbackPath) {
            $collection = $collection->useFallbackPath($fallbackPath);
        }

        $this
            ->addMediaCollection('plan')
            ->singleFile();
    }

}
