<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'category_id',
    'name',
    'sku',
    'price',
    'old_price',
    'discount',
    'image',
    'stock',
    'stock_online',
    'stock_marketplace',
    'stock_retail',
    'stock_warehouse_a',
    'reviews_count',
    'flash_sale',
    'featured',
    'sold',
    'description',
])]
class Product extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo<Category, $this>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
