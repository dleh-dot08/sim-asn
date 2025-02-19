<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 20)->unique();
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('jabatan')->default('2'); // 1=Admin, 2=Staff, 3 mentor, 4 manager, kepala academy, 5 wakil direktur, 6 direktur
            $table->string('divisi');
            $table->string('nik', 20)->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('foto')->nullable();
            $table->string('no_hp', 15)->nullable();
            $table->text('alamat')->nullable();
            $table->date('tanggal_bergabung');
            $table->string('status', 15)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('karyawans');
    }
};
