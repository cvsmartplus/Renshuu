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
    Schema::create('biodatas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        $table->string('full_name');
        $table->string('family_card_number', 16);
        $table->string('ktp_number', 16);
        $table->date('birth_date');
        $table->enum('gender', ['male', 'female']);
        $table->enum('marital_status', ['single', 'married']);
        $table->string('phone_number');
        $table->string('email')->unique();
        $table->foreignId('education_level')->constrained('educations')->onDelete('set null');
        $table->string('province');
        $table->string('city');
        $table->string('district');
        $table->string('subdistrict');
        $table->text('full_address');
        $table->string('cv_path')->nullable();
        $table->string('ktp_path')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
