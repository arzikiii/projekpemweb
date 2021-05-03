<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarInstrumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar_instrumen', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->foreignId('id_pendaftar')->constrained('pendaftar');
            $table->foreignId('id_instrumen_asesmen')->constrained('instrumen_asesmen_kompetensi');
            $table->text('jawaban_self_asesmen');
            $table->string('path_bukti');
            $table->text('komentar_bukti');
            $table->text('jawaban_asesor_verifikasi');
            $table->string('verified_by');
            $table->date('verified_at');
            $table->string('created_by');
            $table->timestamp('created_at');
            $table->string('edited_by');
            $table->timestamp('edited_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar_instrumen');
    }
}
