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
            $table->id();
            $table->string('title');
            $table->string('venue');
            $table->date('date');
            $table->timestamp('start_time');
            $table->text('description');
            $table->string('booking_url')->nullable();
            
            
            $table->unsignedBigInteger('organizer_id');
            $table->unsignedBigInteger('event_category_id');
            
            
            $table->foreign('organizer_id')
                  ->references('id')
                  ->on('organizers')->onDelete('cascade');
            $table->foreign('event_category_id')
                  ->references('id')
                  ->on('event_categories')->onDelete('cascade');
                  
            $table->string('tags');
            $table->integer('active')->default(1);
            $table->timestamps();
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
