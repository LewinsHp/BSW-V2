<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlowKasubbid extends Model
{
    protected $table = "flow_kasubbid";
    protected $primaryKey ="id";
    protected $fillable = ['id','flow_kasubbid'];

    public function permohonan()
    {
        return $this->hasMany(Permohonan::class);
    }
}
