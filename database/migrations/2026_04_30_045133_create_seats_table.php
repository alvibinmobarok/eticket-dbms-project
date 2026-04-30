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
        Schema::create('seats', function (Blueprint $table) {
            $table->id();

            $table->string('seat_type'); // vip or regular
            $table->string('status')->default('available'); // available/booked
            $table->string('seat_number');
            $table->decimal('price', 10, 2);

            $table->foreignId('venue_id')
                  ->constrained('venue') // change to 'venues' if your table is venues
                  ->onDelete('cascade');

            $table->foreignId('event_id')
                  ->constrained('events')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
