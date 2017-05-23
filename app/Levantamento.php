<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Levantamento extends Model
{
    //
//    protected $fillable = ['name', 'email', 'password', 'role_id'];

    public function users()
    {
        return $this->belongsTo(User::class)
            ->withTimestamps();
    }
    public function utentes()
    {
        return $this->belongsTo(Utente::class)
            ->withTimestamps();
    }
    public function begagens()
    {
        return $this->belongsTo(Bagagem::class)
            ->withTimestamps();
    }


}
