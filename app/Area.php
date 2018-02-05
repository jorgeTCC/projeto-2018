<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['name', 'user_id', 'empresa_id', 'email'];

    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
