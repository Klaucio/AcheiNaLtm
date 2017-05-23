<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
//    protected $fillable = ['name', 'email', 'password', 'role_id'];

    //
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function bagagem()
    {
        return $this->belongsTo(Bagagem::class);
    }
}
