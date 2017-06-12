<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Encomenda extends Model
{
    protected $fillable = ['utente_id', 'preco', 'destino', 'nome_receptor', 'telefone_receptor'];

    public function items(){
        return $this->hasMany(Item::class);
    }
    public function utentes()
    {
        return $this->belongsTo(Utente::class,'utente_id');
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

}
