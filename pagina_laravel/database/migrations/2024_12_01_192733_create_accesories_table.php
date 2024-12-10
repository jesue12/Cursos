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
        Schema::create('_accesories', function (Blueprint $table) {
            $table->id();
            $table->string('alerones');
            $table->string('llantas');
            $table->string('rines');
            $table->string('aceite');
            $table->string('viniles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accesories');
    }
};
