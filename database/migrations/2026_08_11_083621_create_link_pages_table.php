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
        Schema::create('link_pages', function (Blueprint $table) {
            $table->id();

            $table->enum('type', [
                'highlight',
                'event',
            ]);

            $table->string('title');

            $table->text('description')->nullable();

            $table->text('url')->nullable();

            $table->string('icon')->nullable();

            $table->string('icon_background')->nullable();

            $table->unsignedInteger('sort_order')->default(0);

            $table->boolean('active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link_pages');
    }
};
