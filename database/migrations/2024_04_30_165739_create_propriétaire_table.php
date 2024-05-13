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
        Schema::create('propriétaire', function (Blueprint $table) {
            $table->id('idprop');
            $table->string('Nom');
            $table->string('Prénom');
            $table->integer('Age');
            $table->string('Sexe');
            $table->string('Image')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propriétaire');

    }
};
