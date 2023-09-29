<?php

namespace App\Models\QuotationAndProposal;

use Illuminate\Database\Eloquent\Model;
use App\Models\QuotationAndProposal\Proposal;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProposalItem extends Model
{
    use HasFactory;

    public function proposal(): BelongsTo
    {
        return $this->belongsTo(Proposal::class);
    }
}
