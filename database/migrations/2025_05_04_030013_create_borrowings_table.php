<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowingsTable extends Migration
{
    public function up()
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke users
            $table->foreignId('book_id')->constrained()->onDelete('cascade'); // Relasi ke books
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali')->nullable();
            $table->string('status')->default('dipinjam'); // 'dipinjam' atau 'dikembalikan'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('borrowings');
    }
}
