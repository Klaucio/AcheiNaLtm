<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = ['designacao,sensibilidade,estado,bagagem_id,encomenda_id'];
    public $timestamps=false;

    public function bagagem()
    {
        return $this->belongsTo(Bagagem::class, 'bagagem_id');
    }
    public function encomenda()
    {
        return $this->belongsTo(Encomenda::class, 'encomenda_id');
    }

}
