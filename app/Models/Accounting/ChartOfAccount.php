<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;
use App\Models\Accounting\GeneralLedgerEntry;
use App\Models\Accounting\FinancialTransaction;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChartOfAccount extends Model
{
    use HasFactory;

    public function transactions(): HasMany
    {
        return $this->hasMany(FinancialTransaction::class, 'account_id');
    }

    public function generalLedgerEntries(): HasMany
    {
        return $this->hasMany(GeneralLedgerEntry::class, 'account_id');
    }
}
