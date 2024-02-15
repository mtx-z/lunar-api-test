<?php

namespace App\Models\Lunar;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Lunar\Models\Price;
use Lunar\Models\ProductVariant;

class Product extends \Dystcz\LunarApi\Domain\Products\Models\Product /*\Lunar\Models\Product*/
{


    protected $fillable = [
        'attribute_data',
        'product_type_id',
        'status',
        'brand_id',
        'uuid',
        'imported_id',
        'virtual',
        'is_sld'
    ];

    /**
     * Define our base sortable attributes.
     *
     * @var array
     */
    protected $sortable = [
        'name',
        'created_at',
        'updated_at',
        'skus',
        'status',
    ];

    public function registerMediaCollections(): void
    {
        //parent::registerMediaCollections();
        $fallbackUrl = config('lunar.media.fallback.url');
        $fallbackPath = config('lunar.media.fallback.path');

        $collection = $this->addMediaCollection('images')
            ->singleFile();

        if ($fallbackUrl) {
            $collection = $collection->useFallbackUrl($fallbackUrl);
        }

        if ($fallbackPath) {
            $collection = $collection->useFallbackPath($fallbackPath);
        }

        $this
            ->addMediaCollection('choix_rapide')
            ->singleFile();

        $this
            ->addMediaCollection('choix_plan')
            ->singleFile();

        $this
            ->addMediaCollection('plan_grand')
            ->singleFile();

        $this
            ->addMediaCollection('plan_placement')
            ->singleFile();

        $this
            ->addMediaCollection('plan_placement_xx')
            ->singleFile();
    }
}
