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
        Schema::create('sman', function (Blueprint $table) {
            $table->id();
            $table->string(column: "npsn")->unique();
            $table->string(column: "nama");
            $table->enum('type',['Negeri','Swasta']);
            $table->string(column: "alamat")->nullable();
            $table->string(column: "kabupaten/kota");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sman');
    }
};
