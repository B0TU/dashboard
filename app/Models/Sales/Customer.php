<?php

namespace App\Models\Sales;

use Illuminate\Database\Eloquent\Model;
use App\Models\QuotationAndProposal\Proposal;
use App\Models\QuotationAndProposal\Quotation;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    public function quotations(): HasMany
    {
        return $this->hasMany(Quotation::class);
    }

    public function proposals(): HasMany
    {
        return $this->hasMany(Proposal::class);
    }
}
