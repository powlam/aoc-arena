<?php

namespace App\Models;

use App\Enums\ArchetypeEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Archetype extends Model
{
    protected $fillable = ['name'];

    public $timestamps = false;

    public function classes(): HasMany
    {
        return $this->hasMany(ArchetypeClass::class, 'main_archetype_id');
    }

    public function augmentedClasses(): HasMany
    {
        return $this->hasMany(ArchetypeClass::class, 'secondary_archetype_id');
    }

    protected function type(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => ArchetypeEnum::from($attributes['name']),
        );
    }
}
