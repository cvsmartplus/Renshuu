<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('joblists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->text('description');
            $table->foreignId('company_id')->constrained('companies')->cascadeOnDelete();
            $table->string('location');
            $table->string('type'); // Full-time, Part-time, etc.
            $table->decimal('salary', 10, 2)->nullable();
            $table->date('posted_at')->nullable();
            $table->foreignId('category_id')->constrained('job_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joblists');
    }
};
