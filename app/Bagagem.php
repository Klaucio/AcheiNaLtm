<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bagagem extends Model
{

    protected $fillable = ['id', 'rota_utente_id'];
    public $timestamps=false;

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
    public function items(){
        return $this->hasMany(Item::class);
    }
}
