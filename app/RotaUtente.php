<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RotaUtente extends Model
{
    protected $fillable = ['rota_id', 'utente_id', 'data_viagem'];


    public function rotas()
    {
        return $this->belongsTo(Rota::class);
    }
    public function utentes()
    {
        return $this->belongsTo(Utente::class,'utente_id');
    }
}
