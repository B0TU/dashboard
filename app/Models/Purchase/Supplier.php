<?php

namespace App\Models\Purchase;

use App\Models\Purchase\PurchaseOrder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase\SupplierPayment;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

    public function payments(): HasMany
    {
        return $this->hasMany(SupplierPayment::class);
    }
    
    public function orders(): HasMany
    {
        return $this->hasMany(PurchaseOrder::class);
    }

}
