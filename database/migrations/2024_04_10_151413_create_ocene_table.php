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
        Schema::create('ocene', function (Blueprint $table) {
            $table->id();
//            $table->unsignedTinyInteger('user_id');
            $table->string('predmet');
            $table->unsignedTinyInteger('ocena');
            $table->string('profesor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocene');
    }
};
