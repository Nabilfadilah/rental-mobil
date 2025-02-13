<?php

use App\Models\Mobil;
use App\Models\User;
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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            // menambah user id, one to many satu user dapat memilik banyak mobil
            $table->foreignIdFor(User::class);
            // menambah mobi id, one to many satu mobil dapat memilik banyak transaksi
            $table->foreignIdFor(Mobil::class);
            $table->string('nama')->nullable();
            $table->string('ponsel')->nullable();
            $table->string('alamat')->nullable();
            $table->string('lama')->nullable();
            $table->date('tgl_pesan')->nullable();
            $table->string('total')->nullable();
            $table->enum('status', ['WAIT', 'PROSES', 'SELESAI'])->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
