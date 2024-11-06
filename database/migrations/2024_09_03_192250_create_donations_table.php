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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_id');
            $table->string('donor_name')->nullable();
            $table->string('donor_email')->nullable();
            $table->decimal('donation_amount',9,2)->default(0);
            $table->timestamp('donation_date');
            $table->integer('payment_id')->nullable();
            $table->text('message')->nullable();
            $table->boolean('is_anonymous')->default(0);
            $table->timestamps();

            $table->foreign('campaign_id')->references('id')->on('campaigns');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
