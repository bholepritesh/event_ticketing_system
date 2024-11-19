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
                $table->string('name');
                $table->string('event_name');
                $table->text('event_description');
                $table->string('event_image');
                $table->string('event_venue');
                $table->dateTime('start_time');
                $table->dateTime('end_time');
                $table->integer('early_bird_price');
                $table->integer('early_bird_quantity');
                $table->integer('regular_price');
                $table->integer('regular_quantity');
                $table->integer('vip_price');
                $table->integer('vip_quantity');
                $table->integer('user_id');
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
