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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Touriste
            $table->foreignId('listing_id')->constrained()->onDelete('cascade'); // Annonce
            $table->date('check_in'); // Date d'arrivée
            $table->date('check_out'); // Date de départ
            $table->decimal('total_price', 8, 2); // Prix total
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending'); // Statut
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
