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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('gender', ['male', 'female']);
            $table->text('description')->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->text('description_3')->nullable();
            $table->foreignId('category_id')->constrained('service_categories');
            $table->string('image_path');
            $table->string('icon_1')->nullable();
            $table->string('icon_2')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('duration')->comment('in minutes');
            $table->boolean('is_active')->default(true);
            $table->string('badge')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
