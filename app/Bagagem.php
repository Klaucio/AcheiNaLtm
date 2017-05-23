<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bagagem extends Model
{
    //
//    protected $fillable = ['name', 'email', 'password', 'role_id'];

    public function rota_utentes()
    {
        return $this->hasOne(RotaUtente::class);
    }
    public function publicacao()
    {
        return $this->hasMany(Publicacao::class);
    }
    public function levantamento()
    {
        return $this->hasOne(Levantamento::class);
    }
}
