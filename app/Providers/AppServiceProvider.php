<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use \Lunar\Models\Address;
use Illuminate\Support\Carbon;
use Lunar\Facades\ModelManifest;
use Lunar\Models\Brand;
use Lunar\Models\Cart;
use Lunar\Models\CartAddress;
use Lunar\Models\CartLine;
use Lunar\Models\Collection;
use Lunar\Models\CollectionGroup;
use Lunar\Models\Customer;
use Lunar\Models\Order;
use Lunar\Models\OrderLine;
use Lunar\Models\Product;
use Lunar\Models\ProductOption;
use Lunar\Models\ProductOptionValue;
use Lunar\Models\ProductVariant;

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
              \Lunar\Models\Product::class            => \App\Models\Lunar\Product::class,
              ProductVariant::class     => \App\Models\Lunar\ProductVariant::class,
              //ProductOption::class      => \App\Models\Lunar\ProductOption::class,
              //ProductOptionValue::class => \App\Models\Lunar\ProductOptionValue::class,
              Collection::class         => \App\Models\Lunar\Collection::class,
              //CollectionGroup::class    => \App\Models\Lunar\CollectionGroup::class,
              //Customer::class           => \App\Models\Lunar\Customer::class,
              //Order::class              => \App\Models\Lunar\Order::class,
              Brand::class              => \App\Models\Lunar\Brand::class,
          ]);

        ModelManifest::register($models);
    }
}
