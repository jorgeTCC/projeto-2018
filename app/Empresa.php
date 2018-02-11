<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'cnpj', 'nome', 'user_id', 'email',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function areas()
    {
       return $this->hasMany(Area::class);
    }
}
