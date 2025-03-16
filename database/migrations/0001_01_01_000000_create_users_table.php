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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_admin')->default(false);
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('birth_place')->nullable(); // Tempat Lahir
            $table->date('birth_date')->nullable(); // Tanggal Lahir
            $table->string('gender')->nullable(); // Jenis Kelamin
            $table->string('address')->nullable(); // Alamat Domisili Sekarang
            $table->string('religion')->nullable(); // Agama
            $table->text('hobbies')->nullable(); // Hobi/Minat/Ketertarikan
            $table->string('emergency_contact')->nullable(); // Nomor Kontak Darurat
            $table->string('current_activity')->nullable(); // Aktivitas/Pekerjaan Saat ini
            $table->string('last_education')->nullable(); // Pendidikan Terakhir
            $table->string('major')->nullable(); // Jurusan Kuliah/Bidang Pekerjaan
            $table->text('social_media')->nullable(); // Nama Pengguna Instagram/Twitter/Facebook/Website/Medsos lainnya
            $table->string('photo')->nullable(); // Unggah foto pribadi
            $table->text('organization_experience_1')->nullable(); // Pengalaman Organisasi #1
            $table->text('organization_experience_2')->nullable(); // Pengalaman Organisasi #2
            $table->text('achievement_experience')->nullable(); // Pengalaman Prestasi
            $table->text('about_generasi_cakrawala')->nullable(); // Apa yang kamu ketahui tentang Generasi Cakrawala
            $table->text('motivation')->nullable(); // Kenapa kamu mau ikutan Generasi Cakrawala
            $table->text('contribution_plan')->nullable(); // Rencana program kontribusi
            $table->text('skill')->nullable(); // Keahlian/keterampilan diri
            $table->string('contribution_location')->nullable(); // Dimana rencana kontribusimu?
            $table->string('contribution_field')->nullable(); // Dibidang apa rencana kontribusimu?
            $table->text('medical_history')->nullable(); // Riwayat penyakit
            $table->text('food_allergy')->nullable(); // Alergi makan
            $table->string('source')->nullable(); // Darimana kamu tahu Gencar?
            $table->string('commitment_letter')->nullable(); // Upload surat komitmen diri
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
