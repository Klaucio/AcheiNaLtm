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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utentes=Utente::all();
      return view('admin.utentes.index',compact('utentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rotas=Rota::pluck('designacao','id');
      return view('admin.utentes.createUte',compact('rotas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $yap=$request->name;
//        foreach($yap as $index=>$value) {
//            $info = new Info();
//            $info->name = $yap[$index];
//            $info->save();
//        }
//        $designacao=$request->designacao;
//        foreach($designacao as $index=>$value) {
//            $item = new Item();
//            $item ->designacao= $designacao[$index];
//            dd($item );
//            $info->save();
//        }
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
//            $bagagem->items()->save($item);
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
