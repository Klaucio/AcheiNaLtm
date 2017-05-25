<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = ['designacao'];
    public $timestamps=false;

    public function bagagem()
    {
        return $this->belongsTo(Bagagem::class);
    }

}
