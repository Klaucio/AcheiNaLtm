<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    //
    protected $fillable=['id','nome','telefone'];
    public $timestamps=false;

    public function user(){
        return $this->hasOne(User::class);
    }
    public function rotaUtente()
    {
        return $this->belongsToMany(RotaUtente::class)
            ->withTimestamps();
    }
    public function levantamento()
    {
        return $this->belongsTo(Levantamento::class)
            ->withTimestamps();
    }
}
