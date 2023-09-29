<?php

namespace App\Models\POS;

use App\Models\User;
use App\Models\POS\PaymentMethod;
use Illuminate\Database\Eloquent\Model;
use App\Models\POS\SalesTransactionItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SalesTransaction extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(SalesTransactionItem::class);
    }
}
