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
        Schema::create('DataMengaji', function (Blueprint $table) {
                //$table->id();
                $table->string('rekaman');
                $table->integer('juz');
                $table->string('surah');
                $table->integer('ayat');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_mengaji');
    }
};
