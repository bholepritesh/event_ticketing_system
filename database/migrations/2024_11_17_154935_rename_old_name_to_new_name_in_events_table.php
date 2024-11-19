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
        
        Schema::table('table', function (Blueprint $table) {
            \DB::statement("ALTER TABLE `events` CHANGE `remaining_tickets` `early_bird_purchased` INT(11)");
            \DB::statement("ALTER TABLE `events` CHANGE `remaining_tickets_regular` `regular_purchased` INT(11)");
            \DB::statement("ALTER TABLE `events` CHANGE `remaining_tickets_vip` `vip_purchased` INT(11)");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            //
        });
    }
};
