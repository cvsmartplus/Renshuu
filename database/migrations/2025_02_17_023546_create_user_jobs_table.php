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
        Schema::create('user_jobs', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['pending','approved','rejected']);
            $table->timestamp('registered_at');
            $table->timestamp('updated_at');
            $table->integer('filtered_by');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('job_admin_id')->references('id')->on('job_admins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
