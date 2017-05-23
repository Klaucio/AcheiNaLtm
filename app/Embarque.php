<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Embarque extends Model
{
    //
//    protected $fillable = ['name', 'email', 'password', 'role_id'];

    public function rota_utentes()
    {
        return $this->hasMany(RotaUtente::class)
            ->withTimestamps();
    }
}
