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
        Schema::create('service_categories', function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('image_path');
            $table->string('icon')->nullable();
            $table->string('route_name')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('display_order')->default(0);
            $table->enum('category', ['homme', 'femme']);
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('service_categories');
    }
}; 