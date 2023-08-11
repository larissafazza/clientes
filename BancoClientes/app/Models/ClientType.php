<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class ClientType extends Model
{
    use HasFactory;

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }
}
