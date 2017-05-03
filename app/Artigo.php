<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    //
    protected $fillable=['tipo','designacao','data','descricao','foto','local_achado','local_actual',
        'descricao_local_achado','descricao_local_actual','user_id','categoria_id'];
    public $timestamps=false;

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function comentario(){
        return $this->hasMany(comentario::class);
    }
    public function categoria(){
        return $this->belongsTo(categoria::class);
    }
}
