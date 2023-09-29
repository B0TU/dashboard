<?php

namespace App\Models\POS;

use App\Models\POS\SalesTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentMethod extends Model
{
    use HasFactory;

    public function transactions(): HasMany
    {
        return $this->hasMany(SalesTransaction::class);
    }
}
