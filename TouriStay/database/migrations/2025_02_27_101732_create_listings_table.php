<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Propriétaire
            $table->string('title');
            $table->text('description');
            $table->string('location'); // Ville ou adresse
            $table->decimal('price', 8, 2); // Prix par nuit
            $table->json('amenities')->nullable(); // Équipements (JSON)
            $table->date('available_from'); // Disponibilité début
            $table->date('available_to'); // Disponibilité fin
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
