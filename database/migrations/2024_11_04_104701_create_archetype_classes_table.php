<?php

use App\Models\Archetype;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('archetype_classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(Archetype::class, 'main_archetype_id');
            $table->foreignIdFor(Archetype::class, 'secondary_archetype_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archetype_classes');
    }
};
