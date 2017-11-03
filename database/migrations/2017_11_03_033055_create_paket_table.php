<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->string('nama_program');
            $table->string('nama_kegiatan');
            $table->string('nama_pekerjaan');
            $table->string('kode_rek_kegiatan');
            $table->string('kode_rek_pekerjaan');
            $table->string('nama_item_kegiatan');
            $table->biginteger('nilai_pagu');
            $table->biginteger('nilai_hps');
            $table->integer('waktu_pelaksanaan');
            $table->date('tanggal_lihat');
            $table->date('tanggal_mapping');
            $table->integer('flag_persiapan')->default(0);
            $table->integer('flag_proses')->default(0);
            $table->integer('flag_kembali')->default(0);
            $table->integer('flag_lelang_gagal')->default(0);
            $table->integer('flag_gagal_lelang')->default(0);
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket');
    }
}
