<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    protected $table ="permohonan";
    protected $primaryKey = "id";
    protected $fillable = [
        'NPWP',
        'NAMA_BADAN_HUKUM',
        'ALAMAT_BADAN_HUKUM',
        'NO_TELP_BADAN_HUKUM',
        'NO_KTP_BADAN_HUKUM',
        'NAMA_PENYERAH',
        'NO_TELP_PENYERAH',
        'NO_PL',
        'TANGGAL_PL',
        'SUBWILAYAH',
        'ALAMAT',
        'LUAS_LOKASI',
        'PERUNTUKAN',
        'KONDISI_LOKASI',
        'BERKAS_SPP',
        'BERKAS_FSU',
        'BERKAS_FEP',
        'flow_id',
        'flow_kasubbid_id',
        'flow_kabid_id',
        'flow_direktur_id'
    ];

        public function flow()
        {
            return $this->belongsTo(Flow::class);
        }

        public function flow_kasubbid()
        {
            return $this->belongsTo(FlowKasubbid::class);
        }

        public function flow_kabid()
        {
            return $this->belongsTo(FlowKabid::class);
        }

        public function flow_direktur()
        {
            return $this->belongsTo(FlowDirektur::class);
        }

        public function wilayah()
        {
            return $this->belongsTo(Wilayah::class);
        }

}
