<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id();
            $table->string('NPWP',100);
            $table->string('NAMA_BADAN_HUKUM',100);
            $table->string('ALAMAT_BADAN_HUKUM',100);
            $table->string('NO_TELP_BADAN_HUKUM',100);
            $table->string('NO_KTP_BADAN_HUKUM',100);
            $table->string('NAMA_PENYERAH',100);
            $table->string('NO_TELP_PENYERAH',100);
            $table->string('NO_PL',100);
            $table->date('TANGGAL_PL');
            $table->string('SUBWILAYAH',100);
            $table->string('ALAMAT',100);
            $table->string('LUAS_LOKASI',100);
            $table->string('PERUNTUKAN',100);
            $table->string('KONDISI_LOKASI',100);
            $table->string('BERKAS_SPP',100);
            $table->string('BERKAS_FSU',100);
            $table->string('BERKAS_FEP',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permohonan');
    }
}
