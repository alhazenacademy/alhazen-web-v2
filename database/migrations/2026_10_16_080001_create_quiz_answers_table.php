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
        Schema::create('quiz_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_id')
                ->constrained('quiz_sessions')
                ->cascadeOnDelete();
            $table->string('nama', 100);
            $table->string('kelas', 50);
            $table->string('instansi', 100);
            $table->string('nama_norm', 100);
            $table->string('kelas_norm', 50);
            $table->string('instansi_norm', 100);
            $table->json('jawaban');
            $table->unsignedSmallInteger('total_soal');
            $table->string('idempotency_key', 36)->unique();
            $table->string('sheets_status', 20)->default('pending')->index();
            $table->text('sheets_error')->nullable();
            $table->unsignedTinyInteger('retry_count')->default(0);
            $table->dateTime('sheets_synced_at')->nullable();
            $table->string('submitted_ip', 45)->nullable();
            $table->dateTime('submitted_at')->index();
            $table->timestamps();

            $table->unique(['session_id', 'nama_norm', 'kelas_norm', 'instansi_norm'], 'quiz_answers_identity_unique');
            $table->index(['session_id', 'sheets_status'], 'quiz_answers_session_status_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_answers');
    }
};
