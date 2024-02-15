<?php

namespace App\Models\Lunar;

use Lunar\Base\Casts\AsAttributeData;
use Lunar\Base\Traits\HasAttributes;

class ProductOption extends \Lunar\Models\ProductOption
{
    use HasAttributes;

    protected $casts = [
        'attribute_data' => AsAttributeData::class,
    ];
}
