<?php

namespace App\Models\POS;

use App\Models\Inventory\Product;
use App\Models\POS\SalesTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SalesTransactionItem extends Model
{
    use HasFactory;

    public function transaction():BelongsTo
    {
        return $this->belongsTo(SalesTransaction::class);
    }

    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
