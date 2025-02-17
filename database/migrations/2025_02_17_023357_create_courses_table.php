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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price',10,2);
            $table->string('trainers_name');
            $table->string('group_chat_link');
           $table->foreignId('course_admin_id')->references('id')->on('course_admins');
            $table->foreignId('manager_id')->references('id')->on('managers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_documents');
    }
};
