<?php

namespace App\Http\Controllers;

use App\Bagagem;
use App\Item;
use App\Rota;
use App\RotaUtente;
use App\Utente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UtenteController extends Controller
{

    public function index()
    {
        $utentes=Utente::orderBy('created_at','desc')->paginate(3);
      return view('admin.utentes.index',compact('utentes'));
    }


    public function create()
    {
        $rotas=Rota::pluck('designacao','id');
      return view('admin.utentes.createUte',compact('rotas'));
    }

    public function store(Request $request)
    {

           //utente save
        $utente=Utente::create($request->all());
        $request->request->add(['utente_id'=>$utente->id]);

        //bilhete save
        $bilhete=RotaUtente::create($request->all());
        $bilhete->utentes()->associate($utente);
        $bilhete->save();

        //bagagem save
        $bagagem=Bagagem::create(['id'=>$bilhete->id,'rota_utente_id'=>$bilhete->id]);
        $bagagem->save();

        //item save
        $designacao=$request->designacao;
        foreach($designacao as $index=>$value) {
            $item = new Item();
            $item->designacao = $designacao[$index];
            $item->bagagem_id=$bilhete->id;
            $item->save();
        }
        return redirect()->route('utentes.index')
            ->with('success',' Registado com Sucesso.');

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
