<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    //
    protected $fillable=['id','tipo','nome','telefone'];
    public $timestamps=false;

    public function user(){
        return $this->hasOne(User::class);
    }
    public function rotas()
    {
        return $this->belongsToMany(Rota::class)
            ->withTimestamps();
    }
    public function levantamento()
    {
        return $this->belongsTo(Levantamento::class)
            ->withTimestamps();
    }
}
