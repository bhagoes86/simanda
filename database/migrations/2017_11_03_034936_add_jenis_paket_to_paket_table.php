<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJenisPaketToPaketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paket', function (Blueprint $table) {
            $table->integer('jenis_paket')->after('tanggal_mapping')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paket', function (Blueprint $table) {
            $table->dropColumn('jenis_paket');
        });
    }
}
