<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Coupon;
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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
      //  StoreLocation::factory(5)->create();
        // Category::factory()->create([
        //     'name' => 'Dairy & Milk',
        //     'slug' => Str::slug('Dairy & Milk'),
        //     'status' => 'active',
        //     'logo' => '1.svg',

        // ]);
        // Category::factory()->create([
        //     'name' => 'Snack & Spice',
        //     'slug' => Str::slug('Snack & Spice'),
        //     'status' => 'active',
        //     'logo' => '2.svg',
        // ]);
        // Category::factory()->create([
        //     'name' => 'Fast Food',
        //     'slug' => Str::slug('Fast Food'),
        //     'status' => 'active',
        //     'logo' => '3.svg',
        // ]);
        // Category::factory()->create([
        //     'name' => 'Juice & Drinks',
        //     'slug' => Str::slug('Juice & Drinks'),
        //     'status' => 'active',
        //     'logo' => '4.svg',
        // ]);
        // Category::factory()->create([
        //     'name' => 'Bakery',
        //     'slug' => Str::slug('Bakery'),
        //     'status' => 'active',
        //     'logo' => '5.svg',
        // ]);
        // Category::factory()->create([
        //     'name' => 'Seafood',
        //     'slug' => Str::slug('Seafood'),
        //     'status' => 'active',
        //     'logo' => '6.svg',
        // ]);

        // $jewellery = Category::factory()->create([
        //     'name' => 'Jewellery',
        //     'slug' => Str::slug('Jewellery'),
        //     'status' => 'active',
        //     'logo' => 'jewlry.svg',
        // ]);

        // SubCategory::factory()->create([
        //     'name' => 'Necklace',
        //     'slug' => Str::slug('Necklace'),
        //     'status' => 'active',
        //     'category_id' => $jewellery->id,
        // ]);
        // SubCategory::factory()->create([
        //     'name' => 'Earrings',
        //     'slug' => Str::slug('Earrings'),
        //     'status' => 'active',
        //     'category_id' => $jewellery->id,
        // ]);
        // SubCategory::factory()->create([
        //     'name' => 'Couple Rings',
        //     'slug' => Str::slug('Couple Rings'),
        //     'status' => 'active',
        //     'category_id' => $jewellery->id,
        // ]);
        // SubCategory::factory()->create([
        //     'name' => 'Pendants',
        //     'slug' => Str::slug('Pendants'),
        //     'status' => 'active',
        //     'category_id' => $jewellery->id,
        // ]);
        // SubCategory::factory()->create([
        //     'name' => 'Crystal',
        //     'slug' => Str::slug('Crystal'),
        //     'status' => 'active',
        //     'category_id' => $jewellery->id,
        // ]);
        // SubCategory::factory()->create([
        //     'name' => 'Bangles',
        //     'slug' => Str::slug('Bangles'),
        //     'status' => 'active',
        //     'category_id' => $jewellery->id,
        // ]);
        // SubCategory::factory()->create([
        //     'name' => 'Bracelets',
        //     'slug' => Str::slug('Bracelets'),
        //     'status' => 'active',
        //     'category_id' => $jewellery->id,
        // ]);
        // SubCategory::factory()->create([
        //     'name' => 'Nose pin',
        //     'slug' => Str::slug('Nose pin'),
        //     'status' => 'active',
        //     'category_id' => $jewellery->id,
        // ]);
        // SubCategory::factory()->create([
        //     'name' => 'Chain',
        //     'slug' => Str::slug('Chain'),
        //     'status' => 'active',
        //     'category_id' => $jewellery->id,
        // ]);

        // $footwear = Category::factory()->create([
        //     'name' => 'Footwear',
        //     'slug' => Str::slug('Footwear'),
        //     'status' => 'active',
        //     'logo' => 'foot.svg',
        // ]);

        // SubCategory::factory()->create([
        //     'name' => 'Sport',
        //     'slug' => Str::slug('Sport'),
        //     'status' => 'active',
        //     'category_id' => $footwear->id,
        // ]);
        // SubCategory::factory()->create([
        //     'name' => 'Formal',
        //     'slug' => Str::slug('Formal'),
        //     'status' => 'active',
        //     'category_id' => $footwear->id,
        // ]);
        // Tag::factory()->create([
        //     'name' => 'Clothes',
        //     'slug' => Str::slug('Clothes'),
        //     'status' => 'active',
        // ]);

        // Tag::factory()->create([
        //     'name' => 'Fruits',
        //     'slug' => Str::slug('Fruits'),
        //     'status' => 'active',
        // ]);
        // Tag::factory()->create([
        //     'name' => 'Snacks',
        //     'slug' => Str::slug('Snacks'),
        //     'status' => 'active',
        // ]);
        // Tag::factory()->create([
        //     'name' => 'Dairy',
        //     'slug' => Str::slug('Dairy'),
        //     'status' => 'active',
        // ]);
        // Tag::factory()->create([
        //     'name' => 'Seafood',
        //     'slug' => Str::slug('Seafood'),
        //     'status' => 'active',
        // ]);
        // Tag::factory()->create([
        //     'name' => 'Toys',
        //     'slug' => Str::slug('Toys'),
        //     'status' => 'active',
        // ]);
        // Tag::factory()->create([
        //     'name' => 'perfume',
        //     'slug' => Str::slug('perfume'),
        //     'status' => 'active',
        // ]);
        // Tag::factory()->create([
        //     'name' => 'jewelry',
        //     'slug' => Str::slug('jewelry'),
        //     'status' => 'active',
        // ]);
        // Tag::factory()->create([
        //     'name' => 'Bags',
        //     'slug' => Str::slug('Bags'),
        //     'status' => 'active',
        // ]);
        // Product::factory(24)->create();
        // ProductDimension::factory(50)->create();
        // ProductWeight::factory(50)->create();
        //ProductTag::factory(30)->create();
       // PaymentModule::factory(4)->create();
       // Order::factory(30)->create();
       // OrderItem::factory(50)->create();
       // Transaction::factory(30)->create();
        // System::factory(1)->create();
        // HomeCategory::factory(1)->create();
        // SaleOn::factory(1)->create();
        // Coupon::factory(10)->create();
    }
}
