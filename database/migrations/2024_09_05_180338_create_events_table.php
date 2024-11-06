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
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Otomatik artan bir id oluşturur
            $table->string('name'); // Etkinlik adı
            $table->text('description')->nullable(); // Etkinlik açıklaması
            $table->date('event_date')->default('2024-01-01')->change();
            $table->string('location'); // Etkinlik yeri
            $table->boolean('status');


            $table->timestamps(); // Oluşturulma ve güncellenme tarihleri
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
