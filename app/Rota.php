<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rota extends Model
{
    protected $fillable = ['designacao', 'descricao'];


    public function utentes()
    {
        return $this->belongsToMany(Utente::class)
            ->withTimestamps();
    }
}
