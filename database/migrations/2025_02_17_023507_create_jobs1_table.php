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
        Schema::create('jobs1', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->tinyText('description');
            $table->string('location');
            $table->foreignId('criteria_id')->constrained()->references('id')->on('criterias');
            $table->foreignId('job_admin_id')->constrained()->references('id')->on('job_admins');
            $table->foreignId('company_id')->constrained()->references('id')->on('company_admins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_admins');
    }
};
