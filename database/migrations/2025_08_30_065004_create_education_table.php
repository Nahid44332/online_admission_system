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
        $table->string('ssc_passing_year');
        $table->string('ssc_board');
        $table->string('ssc_result');
        $table->string('hsc_passing_year');
        $table->string('hsc_board');
        $table->string('hsc_result');
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
