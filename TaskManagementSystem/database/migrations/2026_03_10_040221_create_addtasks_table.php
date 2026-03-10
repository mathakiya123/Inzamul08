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
        Schema::create('addtasks', function (Blueprint $table) {
            $table->increments("id");
            $table->string("title");
            $table->string("tasktype");
            $table->string("assignto");
            $table->string("date");
            $table->string("start_time");
            $table->string("end_time");
            $table->text("descriptions");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addtasks');
    }
};
