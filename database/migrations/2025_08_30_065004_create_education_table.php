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
        Schema::create('education', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('student_id');
        $table->string('ssc_passing_year')->nullable();
        $table->string('ssc_board')->nullable();
        $table->string('ssc_result')->nullable();
        $table->string('hsc_passing_year')->nullable();
        $table->string('hsc_board')->nullable();
        $table->string('hsc_result')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
