<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    public function clientType(): BelongsTo
    {
        return $this->belongsTo(ClientType::class);
    }

    public function sellers(): BelongsToMany
    {
        return $this->belongsToMany(Seller::class)->using(Client::class);
    }

    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class);
    }
}
