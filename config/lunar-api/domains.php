<?php

/*
 * Lunar API domains configuration
 */
return [
    'auth' => [
        'actions' => [
            'create_user' => Dystcz\LunarApi\Domain\Users\Actions\CreateUser::class,
            'create_user_from_cart' => Dystcz\LunarApi\Domain\Carts\Actions\CreateUserFromCart::class,
            'register_user' => Dystcz\LunarApi\Domain\Users\Actions\RegisterUser::class,
        ],
        'notifications' => [
            'reset_password' => Illuminate\Auth\Notifications\ResetPassword::class,
            'verify_email' => Illuminate\Auth\Notifications\VerifyEmail::class,
        ],
    ],

    'addresses' => [
        'model' => Dystcz\LunarApi\Domain\Addresses\Models\Address::class,
        'lunar_model' => Lunar\Models\Address::class,
        'policy' => Dystcz\LunarApi\Domain\Addresses\Policies\AddressPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Addresses\JsonApi\V1\AddressSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Addresses\JsonApi\V1\AddressResource::class,
        'query' => Dystcz\LunarApi\Domain\Addresses\JsonApi\V1\AddressQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Addresses\JsonApi\V1\AddressCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\Addresses\Http\Routing\AddressRouteGroup::class,
    ],

    'attributes' => [
        'model' => Dystcz\LunarApi\Domain\Attributes\Models\Attribute::class,
        'lunar_model' => Lunar\Models\Attribute::class,
        'policy' => Dystcz\LunarApi\Domain\Attributes\Policies\AttributePolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Attributes\JsonApi\V1\AttributeSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Attributes\JsonApi\V1\AttributeResource::class,
        'query' => Dystcz\LunarApi\Domain\Attributes\JsonApi\V1\AttributeQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Attributes\JsonApi\V1\AttributeCollectionQuery::class,
        'routes' => null,
    ],

    'attribute_groups' => [
        'model' => Dystcz\LunarApi\Domain\AttributeGroups\Models\AttributeGroup::class,
        'lunar_model' => Lunar\Models\AttributeGroup::class,
        'policy' => Dystcz\LunarApi\Domain\AttributeGroups\Policies\AttributeGroupPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\AttributeGroups\JsonApi\V1\AttributeGroupSchema::class,
        'resource' => Dystcz\LunarApi\Domain\AttributeGroups\JsonApi\V1\AttributeGroupResource::class,
        'query' => Dystcz\LunarApi\Domain\AttributeGroups\JsonApi\V1\AttributeGroupQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\AttributeGroups\JsonApi\V1\AttributeGroupCollectionQuery::class,
        'routes' => null,
    ],

    'associations' => [
        'model' => Dystcz\LunarApi\Domain\ProductAssociations\Models\ProductAssociation::class,
        'lunar_model' => Lunar\Models\ProductAssociation::class,
        'policy' => Dystcz\LunarApi\Domain\ProductAssociations\Policies\ProductAssociationPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\ProductAssociations\JsonApi\V1\ProductAssociationSchema::class,
        'resource' => Dystcz\LunarApi\Domain\ProductAssociations\JsonApi\V1\ProductAssociationResource::class,
        'query' => Dystcz\LunarApi\Domain\ProductAssociations\JsonApi\V1\ProductAssociationQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\ProductAssociations\JsonApi\V1\ProductAssociationCollectionQuery::class,
        'routes' => null,
    ],

    'brands' => [
        'model' => App\Models\Lunar\Brand::class,
        'lunar_model' => Lunar\Models\Brand::class,
        'policy' => Dystcz\LunarApi\Domain\Brands\Policies\BrandPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Brands\JsonApi\V1\BrandSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Brands\JsonApi\V1\BrandResource::class,
        'query' => Dystcz\LunarApi\Domain\Brands\JsonApi\V1\BrandQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Brands\JsonApi\V1\BrandCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\Brands\Http\Routing\BrandRouteGroup::class,
    ],

    'cart_addresses' => [
        'model' => Dystcz\LunarApi\Domain\CartAddresses\Models\CartAddress::class,
        'lunar_model' => Lunar\Models\CartAddress::class,
        'policy' => Dystcz\LunarApi\Domain\CartAddresses\Policies\CartAddressPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\CartAddresses\JsonApi\V1\CartAddressSchema::class,
        'resource' => Dystcz\LunarApi\Domain\CartAddresses\JsonApi\V1\CartAddressResource::class,
        'query' => Dystcz\LunarApi\Domain\CartAddresses\JsonApi\V1\CartAddressQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\CartAddresses\JsonApi\V1\CartAddressCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\CartAddresses\Http\Routing\CartAddressRouteGroup::class,
    ],

    'cart_lines' => [
        'model' => Dystcz\LunarApi\Domain\CartLines\Models\CartLine::class,
        'lunar_model' => Lunar\Models\CartLine::class,
        'policy' => Dystcz\LunarApi\Domain\CartLines\Policies\CartLinePolicy::class,
        'schema' => Dystcz\LunarApi\Domain\CartLines\JsonApi\V1\CartLineSchema::class,
        'resource' => Dystcz\LunarApi\Domain\CartLines\JsonApi\V1\CartLineResource::class,
        'query' => Dystcz\LunarApi\Domain\CartLines\JsonApi\V1\CartLineQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\CartLines\JsonApi\V1\CartLineCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\CartLines\Http\Routing\CartLineRouteGroup::class,
    ],

    'carts' => [
        'actions' => [
            'checkout_cart' => Dystcz\LunarApi\Domain\Carts\Actions\CheckoutCart::class,
        ],
        'model' => Dystcz\LunarApi\Domain\Carts\Models\Cart::class,
        'lunar_model' => Lunar\Models\Cart::class,
        'policy' => Dystcz\LunarApi\Domain\Carts\Policies\CartPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Carts\JsonApi\V1\CartSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Carts\JsonApi\V1\CartResource::class,
        'query' => Dystcz\LunarApi\Domain\Carts\JsonApi\V1\CartQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Carts\JsonApi\V1\CartCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\Carts\Http\Routing\CartRouteGroup::class,
    ],

    'channels' => [
        'model' => Dystcz\LunarApi\Domain\Channels\Models\Channel::class,
        'lunar_model' => Lunar\Models\Channel::class,
        'policy' => Dystcz\LunarApi\Domain\Channels\Policies\ChannelPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Channels\JsonApi\V1\ChannelSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Channels\JsonApi\V1\ChannelResource::class,
        'query' => Dystcz\LunarApi\Domain\Channels\JsonApi\V1\ChannelQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Channels\JsonApi\V1\ChannelCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\Channels\Http\Routing\ChannelRouteGroup::class,
    ],

    'collections' => [
        'model' => \App\Models\Lunar\Collection::class,
        'lunar_model' => Lunar\Models\Collection::class,
        'policy' => Dystcz\LunarApi\Domain\Collections\Policies\CollectionPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Collections\JsonApi\V1\CollectionSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Collections\JsonApi\V1\CollectionResource::class,
        'query' => Dystcz\LunarApi\Domain\Collections\JsonApi\V1\CollectionQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Collections\JsonApi\V1\CollectionCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\Collections\Http\Routing\CollectionRouteGroup::class,
    ],

    'collection_groups' => [
        'model' => Dystcz\LunarApi\Domain\CollectionGroups\Models\CollectionGroup::class,
        'lunar_model' => Lunar\Models\CollectionGroup::class,
        'policy' => Dystcz\LunarApi\Domain\CollectionGroups\Policies\CollectionGroupPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\CollectionGroups\JsonApi\V1\CollectionGroupSchema::class,
        'resource' => Dystcz\LunarApi\Domain\CollectionGroups\JsonApi\V1\CollectionGroupResource::class,
        'query' => Dystcz\LunarApi\Domain\CollectionGroups\JsonApi\V1\CollectionGroupQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\CollectionGroups\JsonApi\V1\CollectionGroupCollectionQuery::class,
        'routes' => null,
    ],

    'countries' => [
        'model' => Dystcz\LunarApi\Domain\Countries\Models\Country::class,
        'lunar_model' => Lunar\Models\Country::class,
        'policy' => Dystcz\LunarApi\Domain\Countries\Policies\CountryPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Countries\JsonApi\V1\CountrySchema::class,
        'resource' => Dystcz\LunarApi\Domain\Countries\JsonApi\V1\CountryResource::class,
        'query' => Dystcz\LunarApi\Domain\Countries\JsonApi\V1\CountryQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Countries\JsonApi\V1\CountryCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\Countries\Http\Routing\CountryRouteGroup::class,
    ],

    'currencies' => [
        'model' => Dystcz\LunarApi\Domain\Currencies\Models\Currency::class,
        'lunar_model' => Lunar\Models\Currency::class,
        'policy' => Dystcz\LunarApi\Domain\Currencies\Policies\CurrencyPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Currencies\JsonApi\V1\CurrencySchema::class,
        'resource' => Dystcz\LunarApi\Domain\Currencies\JsonApi\V1\CurrencyResource::class,
        'query' => Dystcz\LunarApi\Domain\Currencies\JsonApi\V1\CurrencyQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Currencies\JsonApi\V1\CurrencyCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\Currencies\Http\Routing\CurrencyRouteGroup::class,
    ],

    'customers' => [
        'model' => Dystcz\LunarApi\Domain\Customers\Models\Customer::class,
        'lunar_model' => Lunar\Models\Customer::class,
        'policy' => Dystcz\LunarApi\Domain\Customers\Policies\CustomerPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Customers\JsonApi\V1\CustomerSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Customers\JsonApi\V1\CustomerResource::class,
        'query' => Dystcz\LunarApi\Domain\Customers\JsonApi\V1\CustomerQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Customers\JsonApi\V1\CustomerCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\Customers\Http\Routing\CustomerRouteGroup::class,
    ],

    // 'discounts' => [
    //     'model' => Dystcz\LunarApi\Domain\Discounts\Models\Discount::class,
    //     'lunar_model' => Lunar\Models\Discount::class,
    //     'policy' => Dystcz\LunarApi\Domain\Discounts\Policies\DiscountPolicy::class,
    //     'schema' => Dystcz\LunarApi\Domain\Discounts\JsonApi\V1\DiscountSchema::class,
    //     'resource' => Dystcz\LunarApi\Domain\Discounts\JsonApi\V1\DiscountResource::class,
    //     'query' => Dystcz\LunarApi\Domain\Discounts\JsonApi\V1\DiscountQuery::class,
    //     'collection_query' => Dystcz\LunarApi\Domain\Discounts\JsonApi\V1\DiscountCollectionQuery::class,
    //     'routes' => Dystcz\LunarApi\Domain\Discounts\Http\Routing\DiscountRouteGroup::class,
    //
    // ],

    'media' => [
        'model' => Spatie\MediaLibrary\MediaCollections\Models\Media::class,
        'lunar_model' => null,
        'policy' => Dystcz\LunarApi\Domain\Media\Policies\MediaPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Media\JsonApi\V1\MediaSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Media\JsonApi\V1\MediaResource::class,
        'query' => Dystcz\LunarApi\Domain\Media\JsonApi\V1\MediaQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Media\JsonApi\V1\MediaCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\Media\Http\Routing\MediaRouteGroup::class,
    ],

    'orders' => [
        'model' => Dystcz\LunarApi\Domain\Orders\Models\Order::class,
        'lunar_model' => Lunar\Models\Order::class,
        'policy' => Dystcz\LunarApi\Domain\Orders\Policies\OrderPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Orders\JsonApi\V1\OrderSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Orders\JsonApi\V1\OrderResource::class,
        'query' => Dystcz\LunarApi\Domain\Orders\JsonApi\V1\OrderQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Orders\JsonApi\V1\OrderCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\Orders\Http\Routing\OrderRouteGroup::class,
    ],

    'order_addresses' => [
        'model' => Dystcz\LunarApi\Domain\OrderAddresses\Models\OrderAddress::class,
        'lunar_model' => Lunar\Models\OrderAddress::class,
        'policy' => Dystcz\LunarApi\Domain\OrderAddresses\Policies\OrderAddressPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\OrderAddresses\JsonApi\V1\OrderAddressSchema::class,
        'resource' => Dystcz\LunarApi\Domain\OrderAddresses\JsonApi\V1\OrderAddressResource::class,
        'query' => Dystcz\LunarApi\Domain\OrderAddresses\JsonApi\V1\OrderAddressQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\OrderAddresses\JsonApi\V1\OrderAddressCollectionQuery::class,
        'routes' => null,
    ],

    'order_lines' => [
        'model' => Dystcz\LunarApi\Domain\OrderLines\Models\OrderLine::class,
        'lunar_model' => Lunar\Models\OrderLine::class,
        'policy' => Dystcz\LunarApi\Domain\OrderLines\Policies\OrderLinePolicy::class,
        'schema' => Dystcz\LunarApi\Domain\OrderLines\JsonApi\V1\OrderLineSchema::class,
        'resource' => Dystcz\LunarApi\Domain\OrderLines\JsonApi\V1\OrderLineResource::class,
        'query' => Dystcz\LunarApi\Domain\OrderLines\JsonApi\V1\OrderLineQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\OrderLines\JsonApi\V1\OrderLineCollectionQuery::class,
        'routes' => null,
    ],

    'payment_options' => [
        'model' => null,
        'lunar_model' => null,
        'policy' => null,
        'schema' => Dystcz\LunarApi\Domain\PaymentOptions\JsonApi\V1\PaymentOptionSchema::class,
        'resource' => Dystcz\LunarApi\Domain\PaymentOptions\JsonApi\V1\PaymentOptionResource::class,
        'query' => Dystcz\LunarApi\Domain\PaymentOptions\JsonApi\V1\PaymentOptionQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\PaymentOptions\JsonApi\V1\PaymentOptionCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\PaymentOptions\Http\Routing\PaymentOptionRouteGroup::class,
    ],

    'prices' => [
        'model' => Dystcz\LunarApi\Domain\Prices\Models\Price::class,
        'lunar_model' => Lunar\Models\Price::class,
        'policy' => Dystcz\LunarApi\Domain\Prices\Policies\PricePolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Prices\JsonApi\V1\PriceSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Prices\JsonApi\V1\PriceResource::class,
        'query' => Dystcz\LunarApi\Domain\Prices\JsonApi\V1\PriceQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Prices\JsonApi\V1\PriceCollectionQuery::class,
        'routes' => null,
    ],

    'product_associations' => [
        'model' => Dystcz\LunarApi\Domain\ProductAssociations\Models\ProductAssociation::class,
        'lunar_model' => Lunar\Models\ProductAssociation::class,
        'policy' => Dystcz\LunarApi\Domain\ProductAssociations\Policies\ProductAssociationPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\ProductAssociations\JsonApi\V1\ProductAssociationSchema::class,
        'resource' => Dystcz\LunarApi\Domain\ProductAssociations\JsonApi\V1\ProductAssociationResource::class,
        'query' => Dystcz\LunarApi\Domain\ProductAssociations\JsonApi\V1\ProductAssociationQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\ProductAssociations\JsonApi\V1\ProductAssociationCollectionQuery::class,
        'routes' => null,
    ],

    'product_options' => [
        'model' => Dystcz\LunarApi\Domain\ProductOptions\Models\ProductOption::class,
        'lunar_model' => Lunar\Models\ProductOption::class,
        'policy' => Dystcz\LunarApi\Domain\ProductOptions\Policies\ProductOptionPolicy::class,
        'schema' => null,
        'resource' => Dystcz\LunarApi\Domain\ProductOptions\JsonApi\V1\ProductOptionResource::class,
        'query' => Dystcz\LunarApi\Domain\ProductOptions\JsonApi\V1\ProductOptionQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\ProductOptions\JsonApi\V1\ProductOptionCollectionQuery::class,
        'routes' => null,
    ],

    'product_option_values' => [
        'model' => Dystcz\LunarApi\Domain\ProductOptionValues\Models\ProductOptionValue::class,
        'lunar_model' => Lunar\Models\ProductOptionValue::class,
        'policy' => Dystcz\LunarApi\Domain\ProductOptionValues\Policies\ProductOptionValuePolicy::class,
        'schema' => Dystcz\LunarApi\Domain\ProductOptionValues\JsonApi\V1\ProductOptionValueSchema::class,
        'resource' => Dystcz\LunarApi\Domain\ProductOptionValues\JsonApi\V1\ProductOptionValueResource::class,
        'query' => Dystcz\LunarApi\Domain\ProductOptionValues\JsonApi\V1\ProductOptionValueQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\ProductOptionValues\JsonApi\V1\ProductOptionValueCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\ProductOptionValues\Http\Routing\ProductOptionValueRouteGroup::class,
    ],

    'product_types' => [
        'model' => Dystcz\LunarApi\Domain\ProductTypes\Models\ProductType::class,
        'lunar_model' => Lunar\Models\ProductType::class,
        'policy' => Dystcz\LunarApi\Domain\ProductTypes\Policies\ProductTypePolicy::class,
        'schema' => Dystcz\LunarApi\Domain\ProductTypes\JsonApi\V1\ProductTypeSchema::class,
        'resource' => Dystcz\LunarApi\Domain\ProductTypes\JsonApi\V1\ProductTypeResource::class,
        'query' => Dystcz\LunarApi\Domain\ProductTypes\JsonApi\V1\ProductTypeQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\ProductTypes\JsonApi\V1\ProductTypeCollectionQuery::class,
        'routes' => null,
    ],

    'products' => [
        'model' => \App\Models\Lunar\Product::class,
        'lunar_model' => Lunar\Models\Product::class,
        'policy' => Dystcz\LunarApi\Domain\Products\Policies\ProductPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Products\JsonApi\V1\ProductSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Products\JsonApi\V1\ProductResource::class,
        'query' => Dystcz\LunarApi\Domain\Products\JsonApi\V1\ProductQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Products\JsonApi\V1\ProductCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\Products\Http\Routing\ProductRouteGroup::class,
    ],

    'product_variants' => [
        'model' => \App\Models\Lunar\ProductVariant::class,
        'lunar_model' => Lunar\Models\ProductVariant::class,
        'policy' => Dystcz\LunarApi\Domain\ProductVariants\Policies\ProductVariantPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\ProductVariants\JsonApi\V1\ProductVariantSchema::class,
        'resource' => Dystcz\LunarApi\Domain\ProductVariants\JsonApi\V1\ProductVariantResource::class,
        'query' => Dystcz\LunarApi\Domain\ProductVariants\JsonApi\V1\ProductVariantQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\ProductVariants\JsonApi\V1\ProductVariantCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\ProductVariants\Http\Routing\ProductVariantRouteGroup::class,
    ],

    'shipping_options' => [
        'model' => null,
        'lunar_model' => null,
        'policy' => null,
        'schema' => Dystcz\LunarApi\Domain\ShippingOptions\JsonApi\V1\ShippingOptionSchema::class,
        'resource' => Dystcz\LunarApi\Domain\ShippingOptions\JsonApi\V1\ShippingOptionResource::class,
        'query' => Dystcz\LunarApi\Domain\ShippingOptions\JsonApi\V1\ShippingOptionQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\ShippingOptions\JsonApi\V1\ShippingOptionCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\ShippingOptions\Http\Routing\ShippingOptionRouteGroup::class,
    ],

    'tags' => [
        'model' => Dystcz\LunarApi\Domain\Tags\Models\Tag::class,
        'lunar_model' => Lunar\Models\Tag::class,
        'policy' => Dystcz\LunarApi\Domain\Tags\Policies\TagPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Tags\JsonApi\V1\TagSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Tags\JsonApi\V1\TagResource::class,
        'query' => Dystcz\LunarApi\Domain\Tags\JsonApi\V1\TagQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Tags\JsonApi\V1\TagCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\Tags\Http\Routing\TagRouteGroup::class,
    ],

    'transactions' => [
        'model' => Dystcz\LunarApi\Domain\Transactions\Models\Transaction::class,
        'lunar_model' => Lunar\Models\Transaction::class,
        'policy' => Dystcz\LunarApi\Domain\Transactions\Policies\TransactionPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Transactions\JsonApi\V1\TransactionSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Transactions\JsonApi\V1\TransactionResource::class,
        'query' => Dystcz\LunarApi\Domain\Transactions\JsonApi\V1\TransactionQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Transactions\JsonApi\V1\TransactionCollectionQuery::class,
        'routes' => null,
    ],

    'urls' => [
        'model' => Dystcz\LunarApi\Domain\Urls\Models\Url::class,
        'lunar_model' => Lunar\Models\Url::class,
        'policy' => Dystcz\LunarApi\Domain\Urls\Policies\UrlPolicy::class,
        'schema' => Dystcz\LunarApi\Domain\Urls\JsonApi\V1\UrlSchema::class,
        'resource' => Dystcz\LunarApi\Domain\Urls\JsonApi\V1\UrlResource::class,
        'query' => Dystcz\LunarApi\Domain\Urls\JsonApi\V1\UrlQuery::class,
        'collection_query' => Dystcz\LunarApi\Domain\Urls\JsonApi\V1\UrlCollectionQuery::class,
        'routes' => Dystcz\LunarApi\Domain\Urls\Http\Routing\UrlRouteGroup::class,
    ],
];
