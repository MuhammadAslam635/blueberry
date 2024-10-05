<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vendor_id',
        'sub_category_id',
        'name',
        'slug',
        'price',
        'sale_price',
        'qty',
        'sale_qty',
        'sku',
        'stock',
        'closure',
        'sole',
        'detail',
        'description',
        'status',
        'gallery',
        'image'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vendor_id' => 'integer',
        'sub_category_id' => 'integer',
        'price' => 'double',
        'sale_price' => 'double',
        'gallery' => 'array',
    ];

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
    public function productOrders():BelongsToMany {
        return $this->belongsToMany(Order::class, 'order_items', 'product_id', 'order_id');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function productTags(): HasMany
    {
        return $this->hasMany(ProductTag::class);
    }

    public function productWeights(): HasMany
    {
        return $this->hasMany(ProductWeight::class);
    }

    public function productDimensions(): HasMany
    {
        return $this->hasMany(ProductDimension::class);
    }
}
