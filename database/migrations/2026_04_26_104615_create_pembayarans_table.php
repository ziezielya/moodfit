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
        Schema::create('pembayarans', function (Blueprint $table) {
    $table->foreignId('produk_id')->constrained();
$table->string('nama_customer');
$table->string('no_telp');
$table->text('alamat');
$table->string('ukuran_detail');
$table->enum('metode', ['Transfer', 'Cash', 'E-Wallet']);
$table->decimal('total', 12, 2);
$table->dateTime('tgl_pembayaran');
$table->text('catatan')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
