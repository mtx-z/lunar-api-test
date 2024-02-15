<?php

namespace App\Models\Lunar;

use Lunar\Base\Casts\AsAttributeData;
use Lunar\Base\Traits\HasAttributes;

class ProductOptionValue extends \Lunar\Models\ProductOptionValue
{
    use HasAttributes;

    protected $casts = [
        'attribute_data' => AsAttributeData::class,
    ];
}
