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
        Schema::create('animev', function (Blueprint $table) {
            $table->id();
            $table->string('document');
            $table->string('hashname');
            $table->timestamps();
        });

        Schema::table('animev', function (Blueprint $table) {
            $table->unsignedBigInteger('a_id');
        
            $table->foreign('a_id')->references('id')->on('anime');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animev');
    }
};
