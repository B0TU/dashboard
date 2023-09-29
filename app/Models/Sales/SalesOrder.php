<?php

namespace App\Models\Sales;

use App\Models\Sales\Customer;
use App\Models\Sales\SalesOrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SalesOrder extends Model
{
    use HasFactory;

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    
    public function items(): HasMany
    {
        return $this->hasMany(SalesOrderItem::class);
    }
}
