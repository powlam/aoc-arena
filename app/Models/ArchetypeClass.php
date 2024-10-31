<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArchetypeClass extends Model
{
    protected $fillable = ['name', 'main_archetype_id', 'secondary_archetype_id'];

    public $timestamps = false;

    public function mainArchetype(): BelongsTo
    {
        return $this->belongsTo(Archetype::class, 'main_archetype_id');
    }

    public function secondaryArchetype(): BelongsTo
    {
        return $this->belongsTo(Archetype::class, 'secondary_archetype_id');
    }
}
