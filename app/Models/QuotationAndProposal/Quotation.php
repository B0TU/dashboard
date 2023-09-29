<?php

namespace App\Models\QuotationAndProposal;

use App\Models\Sales\Customer;
use Illuminate\Database\Eloquent\Model;
use App\Models\QuotationAndProposal\QuotationItem;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quotation extends Model
{
    use HasFactory;

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(QuotationItem::class);
    }
}
