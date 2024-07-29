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
        Schema::create('bank_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('session');
            $table->bigInteger('numCompte')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('numero');
            $table->string('code');
            $table->string('token');
            $table->string('tokenVerif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_users');
    }
};
