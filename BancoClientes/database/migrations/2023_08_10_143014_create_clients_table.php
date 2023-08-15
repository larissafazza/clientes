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
        Schema::create('person_types', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->timestamps();
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mail')->unique();
            $table->string('image_path')->default('https://i.pinimg.com/originals/f1/0f/f7/f10ff70a7155e5ab666bcdd1b45b726d.jpg');
            $table->unsignedBigInteger('person_type_id')->default(1); //chave estrangeira refere-se ao tipo de client (pessoa física ou jurídica)
            $table->foreign('person_type_id')->references('id')->on('person_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
