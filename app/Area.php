<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['name', 'user_id', 'empresa_id', 'email'];
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
