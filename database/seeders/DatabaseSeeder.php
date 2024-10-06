<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Coupon;
use App\Models\Currency;
use App\Models\Curreny;
use App\Models\HomeCategory;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PaymentModule;
use App\Models\Product;
use App\Models\ProductDimension;
use App\Models\ProductTag;
use App\Models\ProductWeight;
use App\Models\SaleOn;
use App\Models\StoreLocation;
use App\Models\SubCategory;
use App\Models\System;
use App\Models\Tag;
use App\Models\Transaction;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $cities = [
            'Karachi' => 'PK-KHI',
            'Islamabad' => 'PK-ISB',
            'Lahore' => 'PK-LHR',
            'Multan' => 'PK-MUL',
            'Peshawar' => 'PK-PES',
        ];

        foreach ($cities as $city => $code) {
            StoreLocation::factory()->create([
                'name' => $city,
                'slug' => Str::slug($city, '-'),
                'status' => 'active',
                'country_code' => 'PK',
                'city_code' => $code,
            ]);
        }
        $currencies = [
            // Assuming this is the structure for currencies
            'USD' => ['symbol' => '$', 'status' => true],
            'EUR' => ['symbol' => '€', 'status' => true],
            'GBP' => ['symbol' => '£', 'status' => true],
            'PKR' => ['symbol' => '₨', 'status' => true],
        ];

        foreach ($currencies as $currency => $details) {
            // Create currency using factory
            Currency::factory()->create([
                'currency' => $currency,
                'symbol' => $details['symbol'],
                'status' => $details['status'],
            ]);
        }
        // User::factory(10)->create();
        $jewellery = Category::factory()->create([
            'name' => 'Jewellery',
            'slug' => Str::slug('Jewellery'),
            'status' => 'active',
            'logo' => 'jewlry.svg',
        ]);

        $dairyMilk = Category::factory()->create([
            'name' => 'Dairy & Milk',
            'slug' => Str::slug('Dairy & Milk'),
            'status' => 'active',
            'logo' => '1.svg',
        ]);

        $snackSpice = Category::factory()->create([
            'name' => 'Snack & Spice',
            'slug' => Str::slug('Snack & Spice'),
            'status' => 'active',
            'logo' => '2.svg',
        ]);

        $fastFood = Category::factory()->create([
            'name' => 'Fast Food',
            'slug' => Str::slug('Fast Food'),
            'status' => 'active',
            'logo' => '3.svg',
        ]);

        $juiceDrinks = Category::factory()->create([
            'name' => 'Juice & Drinks',
            'slug' => Str::slug('Juice & Drinks'),
            'status' => 'active',
            'logo' => '4.svg',
        ]);

        $bakery = Category::factory()->create([
            'name' => 'Bakery',
            'slug' => Str::slug('Bakery'),
            'status' => 'active',
            'logo' => '5.svg',
        ]);

        $seafood = Category::factory()->create([
            'name' => 'Seafood',
            'slug' => Str::slug('Seafood'),
            'status' => 'active',
            'logo' => '6.svg',
        ]);

        // Create subcategories for Jewellery
        SubCategory::factory()->create([
            'name' => 'Necklace',
            'slug' => Str::slug('Necklace'),
            'status' => 'active',
            'category_id' => $jewellery->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Earrings',
            'slug' => Str::slug('Earrings'),
            'status' => 'active',
            'category_id' => $jewellery->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Couple Rings',
            'slug' => Str::slug('Couple Rings'),
            'status' => 'active',
            'category_id' => $jewellery->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Pendants',
            'slug' => Str::slug('Pendants'),
            'status' => 'active',
            'category_id' => $jewellery->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Crystal',
            'slug' => Str::slug('Crystal'),
            'status' => 'active',
            'category_id' => $jewellery->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Bangles',
            'slug' => Str::slug('Bangles'),
            'status' => 'active',
            'category_id' => $jewellery->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Bracelets',
            'slug' => Str::slug('Bracelets'),
            'status' => 'active',
            'category_id' => $jewellery->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Nose pin',
            'slug' => Str::slug('Nose pin'),
            'status' => 'active',
            'category_id' => $jewellery->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Chain',
            'slug' => Str::slug('Chain'),
            'status' => 'active',
            'category_id' => $jewellery->id,
        ]);

        // Create subcategories for Dairy & Milk
        SubCategory::factory()->create([
            'name' => 'Milk',
            'slug' => Str::slug('Milk'),
            'status' => 'active',
            'category_id' => $dairyMilk->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Cheese',
            'slug' => Str::slug('Cheese'),
            'status' => 'active',
            'category_id' => $dairyMilk->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Butter',
            'slug' => Str::slug('Butter'),
            'status' => 'active',
            'category_id' => $dairyMilk->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Yogurt',
            'slug' => Str::slug('Yogurt'),
            'status' => 'active',
            'category_id' => $dairyMilk->id,
        ]);

        // Create subcategories for Snack & Spice
        SubCategory::factory()->create([
            'name' => 'Chips',
            'slug' => Str::slug('Chips'),
            'status' => 'active',
            'category_id' => $snackSpice->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Nuts',
            'slug' => Str::slug('Nuts'),
            'status' => 'active',
            'category_id' => $snackSpice->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Spices',
            'slug' => Str::slug('Spices'),
            'status' => 'active',
            'category_id' => $snackSpice->id,
        ]);

        // Create subcategories for Fast Food
        SubCategory::factory()->create([
            'name' => 'Burgers',
            'slug' => Str::slug('Burgers'),
            'status' => 'active',
            'category_id' => $fastFood->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Pizza',
            'slug' => Str::slug('Pizza'),
            'status' => 'active',
            'category_id' => $fastFood->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Sandwiches',
            'slug' => Str::slug('Sandwiches'),
            'status' => 'active',
            'category_id' => $fastFood->id,
        ]);

        // Create subcategories for Juice & Drinks
        SubCategory::factory()->create([
            'name' => 'Juice',
            'slug' => Str::slug('Juice'),
            'status' => 'active',
            'category_id' => $juiceDrinks->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Soda',
            'slug' => Str::slug('Soda'),
            'status' => 'active',
            'category_id' => $juiceDrinks->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Water',
            'slug' => Str::slug('Water'),
            'status' => 'active',
            'category_id' => $juiceDrinks->id,
        ]);

        // Create subcategories for Bakery
        SubCategory::factory()->create([
            'name' => 'Bread',
            'slug' => Str::slug('Bread'),
            'status' => 'active',
            'category_id' => $bakery->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Cakes',
            'slug' => Str::slug('Cakes'),
            'status' => 'active',
            'category_id' => $bakery->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Pastries',
            'slug' => Str::slug('Pastries'),
            'status' => 'active',
            'category_id' => $bakery->id,
        ]);

        // Create subcategories for Seafood
        SubCategory::factory()->create([
            'name' => 'Fish',
            'slug' => Str::slug('Fish'),
            'status' => 'active',
            'category_id' => $seafood->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Shrimp',
            'slug' => Str::slug('Shrimp'),
            'status' => 'active',
            'category_id' => $seafood->id,
        ]);

        SubCategory::factory()->create([
            'name' => 'Crab',
            'slug' => Str::slug('Crab'),
            'status' => 'active',
            'category_id' => $seafood->id,
        ]);
        Product::factory(24)->create();

        // Create product dimensions
        $productDimensions = [
            'xs' => 'Extra Small',
            'sm' => 'Small',
            'md' => 'Medium',
            'lg' => 'Large',
            'xl' => 'Extra Large',
            'xxl' => 'Double Extra Large',
        ];

        foreach (Product::all() as $product) {
            foreach ($productDimensions as $dimension => $name) {
                ProductDimension::factory()->create([
                    'product_id' => $product->id,
                    'width' => $dimension,
                ]);
            }
        }

        // Create product weights
        foreach (Product::all() as $product) {
            for ($i = 1; $i <= 5; $i++) {
                ProductWeight::factory()->create([
                    'product_id' => $product->id,
                    'weight' => $i,
                    'type' => 'kg',
                ]);

                ProductWeight::factory()->create([
                    'product_id' => $product->id,
                    'weight' => $i * 1000,
                    'type' => 'g',
                ]);
            }
        }

        // Create tags
        $tags = [
            'Fashion',
            'Electronics',
            'Home & Kitchen',
            'Beauty & Personal Care',
            'Sports & Outdoors',
            'Toys & Games',
            'Baby Products',
            'Pet Products',
            'Grocery & Gourmet Food',
            'Handmade',
        ];

        foreach ($tags as $tag) {
            Tag::factory()->create([
                'name' => $tag,
            ]);
        }

        // Create product tags
        foreach (Product::all() as $product) {
            foreach (Tag::all() as $tag) {
                ProductTag::factory()->create([
                    'product_id' => $product->id,
                    'tag_id' => $tag->id,
                ]);
            }
        }
        PaymentModule::factory()->create([
            'type' => 'cod',
            'status' => 'active',
            'mode' => 'live',
            'module_key' => 'cod_module_key',
            'module_secret' => 'cod_module_secret',
            'merchant_id' => 'cod_merchant_id',
            'module_password' => 'cod_module_password',
        ]);

        PaymentModule::factory()->create([
            'type' => 'strip',
            'status' => 'active',
            'mode' => 'live',
            'module_key' => 'strip_module_key',
            'module_secret' => 'strip_module_secret',
            'merchant_id' => 'strip_merchant_id',
            'module_password' => 'strip_module_password',
        ]);

        PaymentModule::factory()->create([
            'type' => 'jazzcash',
            'status' => 'active',
            'mode' => 'live',
            'module_key' => 'jazzcash_module_key',
            'module_secret' => 'jazzcash_module_secret',
            'merchant_id' => 'jazzcash_merchant_id',
            'module_password' => 'jazzcash_module_password',
        ]);

        PaymentModule::factory()->create([
            'type' => 'easypaisa',
            'status' => 'active',
            'mode' => 'live',
            'module_key' => 'easypaisa_module_key',
            'module_secret' => 'easypaisa_module_secret',
            'merchant_id' => 'easypaisa_merchant_id',
            'module_password' => 'easypaisa_module_password',
        ]);

        PaymentModule::factory()->create([
            'type' => 'whatsapp',
            'status' => 'active',
            'mode' => 'live',
            'module_key' => 'whatsapp_module_key',
            'module_secret' => 'whatsapp_module_secret',
            'merchant_id' => 'whatsapp_merchant_id',
            'module_password' => 'whatsapp_module_password',
        ]);
        User::factory(20)->create();
        Order::factory(30)->create();
        OrderItem::factory(50)->create();
        Transaction::factory(30)->create();
        System::factory(1)->create();
        HomeCategory::factory(1)->create();
        SaleOn::factory(1)->create();
        Coupon::factory(10)->create();
    }
}
