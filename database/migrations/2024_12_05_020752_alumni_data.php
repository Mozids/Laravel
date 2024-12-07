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
        Schema::create('students', function (Blueprint $table) { // Gunakan nama tabel dalam bentuk plural
            $table->id();
            $table->integer('nisn');
            $table->string('name'); // Perbaiki penulisan
            $table->string('email'); // Perbaiki penulisan
            $table->enum('major', ['PPLG', 'TJKT', 'MPLB', 'HR', 'TKRO', 'TBSM', 'TMP', 'DKV']); // Enum sudah benar
            $table->string('tahun_lulusan');
            $table->enum('keterangan', ['Bekerja', 'Nganggur', 'Kuliah']); // Enum sudah benar
            $table->string('nama_tempat')->nullable(); // Kolom ini bisa kosong
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students'); // Pastikan nama tabel konsisten
    }
};
