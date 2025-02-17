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
            $table->decimal('amount',10,2);
            $table->string('payment_method');
            $table->text('description');
            $table->enum('status',['pending','completed','failed']);
            $table->foreignId('subscription_id')->references('id')->on('subscriptions');
            $table->string('midtrans_transaction_id');
            $table->text('payment_url');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('course_id')->references('id')->on('courses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_admins');
    }
};
