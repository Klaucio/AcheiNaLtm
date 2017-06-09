<?php

namespace App\Http\Controllers;

use App\Encomenda;
use App\Item;
use App\Utente;
use Illuminate\Http\Request;

class EncomendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encomendas=Encomenda::all();
        return view('admin.encomendas.index',compact('encomendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.encomendas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $utente=Utente::create($request->all());
        $request->request->add(['utente_id'=>$utente->id]);

        //encomenda save
        $encomenda=Encomenda::create($request->all());
        $utente->encomendas()->save($encomenda);
//        $bilhete->save();

        //bagagem save
//        $bagagem=Bagagem::create(['id'=>$bilhete->id,'rota_utente_id'=>$bilhete->id]);
//        $bagagem->save();

        //item save
        $designacao=$request->designacao;
        foreach($designacao as $index=>$value) {
            $item = new Item();
            $item->designacao = $designacao[$index];
            $item->encomenda_id=$encomenda->id;
            $item->save();
        }
        return redirect()->route('utentes.index')
            ->with('success',' Registado com Sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
