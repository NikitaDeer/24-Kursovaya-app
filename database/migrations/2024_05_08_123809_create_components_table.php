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
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Наименование
            $table->string('type'); // Тип компонента
            $table->string('manufacturer')->nullable(); // Производитель
            $table->text('description')->nullable(); // Описание
            $table->text('image_path')->nullable(); // Путь к изображению компонента
            // $table->decimal('price', 8, 2)->nullable(); // Цена, если нужно

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
        Schema::dropIfExists('components');
    }
};
