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

    protected $fillable = [
        'name',
        'mail',
        'image_path',
        'person_type_id'
    ];


    public function clientType()
    {
        return $this->belongsTo(ClientType::class);
    }

    public function sellers()
    {
        return $this->belongsToMany(Seller::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
}
