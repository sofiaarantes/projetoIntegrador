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
        Schema::create('arquivo', function (Blueprint $table) {
            Schema::create('arquivo', function (Blueprint $table) {
                $table->increments('id_arquivo'); 
                $table->string('conteudo_arquivo', 1000); 
                $table->date('data'); 
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arquivo');
    }
};
