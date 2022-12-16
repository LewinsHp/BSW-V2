<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlowKabid extends Model
{
    protected $table = "flow_kabid";
    protected $primaryKey ="id";
    protected $fillable = ['id','flow_kabid'];

    public function permohonan()
    {
        return $this->hasMany(Permohonan::class);
    }
}
