<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rota extends Model
{
//    protected $fillable = ['name', 'email', 'password', 'role_id'];

    //
    public function utentes()
    {
        return $this->belongsToMany(Utente::class)
            ->withTimestamps();
    }
}
