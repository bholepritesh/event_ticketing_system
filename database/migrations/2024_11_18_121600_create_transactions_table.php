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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->text('order_id');
            $table->text('transaction_id')->nullable();
            $table->integer('user_id');
            $table->integer('event_id');
            $table->double('request_price');
            $table->double('api_price')->nullable();
            $table->text('currency')->nullable();
            $table->text('payment_method')->nullable();
            $table->dateTime('transaction_time')->nullable();
            $table->text('payment_status')->comment(' 0=checkout, 1=Initiate, 2=Success, 3= Fail');
            $table->text('message')->nullable();
            $table->integer('early_bird_price');
            $table->integer('early_bird_quantity');
            $table->integer('regular_price');
            $table->integer('regular_quantity');
            $table->integer('vip_price');
            $table->integer('vip_quantity');
            $table->longText('api_response')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
