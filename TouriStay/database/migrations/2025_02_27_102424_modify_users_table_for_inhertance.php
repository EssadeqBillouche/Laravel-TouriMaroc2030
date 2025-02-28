<?php
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
        // Modifier la table users (si nécessaire)
        Schema::table('users', function (Blueprint $table) {
            // Supprimer le champ user_type si vous ne l'utilisez plus
            $table->dropColumn('user_type');
        });

        // Créer la table tourists
        Schema::create('tourists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Lien vers users
            $table->string('phone_number')->nullable(); // Informations spécifiques
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->timestamps();
        });
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Lien vers users
            $table->string('phone_number')->nullable(); // Informations spécifiques
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('company_name')->nullable(); // Nom de l'entreprise (optionnel)
            $table->timestamps();
        });

        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Lien vers users
            $table->string('phone_number')->nullable(); // Informations spécifiques
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
        Schema::dropIfExists('owners');
        Schema::dropIfExists('tourists');

        Schema::table('users', function (Blueprint $table) {
            $table->string('user_type')->default('Tourist'); // Rétablir le champ user_type
        });
    }
};
