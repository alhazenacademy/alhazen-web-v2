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
        Schema::table('trial_times', function (Blueprint $table) {
            $table->dropUnique(['time']);
            $table->unique(['day_of_week', 'time'], 'trial_times_day_time_unique');
        });
    }

    public function down(): void
    {
        Schema::table('trial_times', function (Blueprint $table) {
            $table->dropUnique('trial_times_day_time_unique');
            $table->unique(['time']);
        });
    }
};
