<?php

namespace App\Models;

use App\Casts\ReadableCurrency;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobListing extends Model
{
    use HasFactory;

    protected $casts = [
        'salary' => ReadableCurrency::class
    ];

    public function jobOwner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
