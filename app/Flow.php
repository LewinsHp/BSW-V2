<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flow extends Model
{
    protected $table = "flow";
    protected $primaryKey = "id";
    protected $fillable = ['id','flow'];

    public function flow()
        {
            return $this->hasMany(Permohonan::class);
        }


}
