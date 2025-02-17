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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->text('message');
            $table->enum('status',['unread','read']);
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('article_id')->references('id')->on('articles');
            $table->foreignId('certificate_id')->references('id')->on('certificates');
            $table->foreignId('transaction_id')->references('id')->on('transactions');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
