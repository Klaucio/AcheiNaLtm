<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
//    protected $fillable = ['name', 'email', 'password', 'role_id'];

    public function bagagem()
    {
        return $this->belongsTo(Bagagem::class);
    }

}
