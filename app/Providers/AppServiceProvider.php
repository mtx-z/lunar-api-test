<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Lunar\Facades\ModelManifest;
use Lunar\Models\CollectionGroup;
use Lunar\Models\Customer;
use Lunar\Models\Order;
use Lunar\Models\ProductOption;
use Lunar\Models\ProductOptionValue;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $models = collect([
            \Lunar\Models\Product::class => \App\Models\Lunar\Product::class,
            \Lunar\Models\ProductVariant::class => \App\Models\Lunar\ProductVariant::class,
            //ProductOption::class      => \App\Models\Lunar\ProductOption::class,
            //ProductOptionValue::class => \App\Models\Lunar\ProductOptionValue::class,
            \Lunar\Models\Collection::class => \App\Models\Lunar\Collection::class,
            //CollectionGroup::class    => \App\Models\Lunar\CollectionGroup::class,
            //Customer::class           => \App\Models\Lunar\Customer::class,
            //Order::class              => \App\Models\Lunar\Order::class,
            \Lunar\Models\Brand::class => \App\Models\Lunar\Brand::class,
        ]);

        ModelManifest::register($models);
    }
}
