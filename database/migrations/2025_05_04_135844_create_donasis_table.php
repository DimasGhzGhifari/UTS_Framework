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
        Schema::create('donasis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_donatur');
            $table->string('email');
            $table->decimal('nominal', 12, 2);
            $table->string('metode_pembayaran');
            $table->date('tanggal_donasi');
            $table->enum('status', ['menunggu konfirmasi', 'dikonfirmasi', 'batal'])->default('menunggu konfirmasi');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasis');
    }
};
