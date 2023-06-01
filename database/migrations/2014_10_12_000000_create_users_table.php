<?php

use App\Models\Groupe;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('prenom');
            $table->integer('matricule')->nullable();
            $table->date('naissance');
            $table->integer('telephone');
            $table->string('login');
            $table->text('acte_naissance');
            $table->text('photo');
            $table->text('certificat_medical');
            $table->string('serie')->nullable();
            $table->boolean('is_prof')->default(false);
            $table->boolean('is_admin')->default(false);

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
