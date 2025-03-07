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
            $table->string('slug')->unique(); 
            $table->string('title'); // Judul kursus
            $table->text('description'); // Deskripsi kursus
            $table->decimal('price', 10, 2)->default(0.00); // Harga kursus
            $table->string('trainers_name'); // Nama pelatih/pengajar
            $table->string('group_chat_link')->nullable(); // Link grup diskusi (Opsional)
            $table->foreignId('course_admin_id')->constrained('course_admins')->onDelete('cascade'); // Admin kursus
            $table->foreignId('manager_id')->constrained('managers')->onDelete('cascade'); // Manajer kursus
            $table->string('image')->nullable(); // Gambar kursus
            $table->integer('duration')->default(0); // Durasi kursus dalam jam
            $table->enum('level', ['Beginner', 'Intermediate', 'Advanced'])->default('Beginner'); // Level kesulitan
            $table->enum('status', ['Draft', 'Published', 'Archived'])->default('Draft'); // Status kursus
            $table->text('content')->nullable();
            $table->integer('student')->default(0);
            $table->integer('discount')->default(0);
            $table->timestamps(); // Timestamps untuk created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
