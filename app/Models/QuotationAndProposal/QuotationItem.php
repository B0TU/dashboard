<?php

namespace App\Models\QuotationAndProposal;

use Illuminate\Database\Eloquent\Model;
use App\Models\QuotationAndProposal\Quotation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuotationItem extends Model
{
    use HasFactory;

    public function quotation(): BelongsTo
    {
        return $this->belongsTo(Quotation::class);
    }
}
