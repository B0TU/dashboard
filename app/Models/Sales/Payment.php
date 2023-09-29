<?php

namespace App\Models\Sales;

use App\Models\Sales\Invoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }
}
