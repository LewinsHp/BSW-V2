<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlowDirektur extends Model
{
    protected $table = "flow_direktur";
    protected $primaryKey ="id";
    protected $fillable = ['id','flow_direktur'];

    public function permohonan()
    {
        return $this->hasMany(Permohonan::class);
    }
}
