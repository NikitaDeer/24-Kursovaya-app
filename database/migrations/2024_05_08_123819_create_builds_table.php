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
        Schema::create('builds', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Имя сборки
            $table->text('description')->nullable(); // Описание сборки
            $table->string('image_path')->nullable(); // Путь к изображению сборки
            $table->string('zip_path'); // Путь к ZIP архиву с 3D моделью для скачивания

            //публикация
            $table->boolean('is_published')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('builds');
    }
};
