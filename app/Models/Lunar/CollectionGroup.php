<?php

namespace App\Models\Lunar;

use Lunar\Base\Casts\AsAttributeData;
use Lunar\Base\Traits\HasAttributes;

class CollectionGroup extends \Lunar\Models\CollectionGroup
{
    use HasAttributes;

    protected $fillable = [
        'uuid',
        'name',
        'handle',
        'attribute_data',
        'imported_id',
        'is_sld'
    ];
    protected $casts = [
        'attribute_data' => AsAttributeData::class,
    ];
}
