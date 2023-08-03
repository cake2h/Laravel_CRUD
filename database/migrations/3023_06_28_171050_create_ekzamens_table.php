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
        Schema::create('ekzamens', function (Blueprint $table) {
            $table->id();
            $table->integer('score');
            $table->foreignId('stud_id')->constrained('students');
            $table->foreignId('pred_id')->constrained('predmets');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekzamens');
    }
};
