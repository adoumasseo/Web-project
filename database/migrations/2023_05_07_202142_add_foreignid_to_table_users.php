<?php

use App\Models\Classe;
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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignIdFor(Groupe::class)->constrained()->cascadeOnDelete()->nullable();
            $table->foreignIdFor(Classe::class)->constrained()->cascadeOnDelete()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeignIdFor(Groupe::class);
            $table->dropForeignIdFor(Classe::class);
        });
    }
};
