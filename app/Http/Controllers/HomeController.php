<?php

namespace App\Http\Controllers;

use App\Encomenda;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $achados=DB::table('artigos')->where('tipo','=','Achado')->get();
//        $perdidos=DB::table('artigos')->where('tipo','=','Perdido')->get();
//        $encomendas=null;


        $items=DB::table('items')->where('estado','=','Perdido')->orderBy('id','desc')->paginate(6);

//        $items=Item::with('bagagens')->get();
//        $items=DB::table('items')->where('estado','=','Achado')->orderBy('id','desc')->paginate(6);
//        $items=DB::table('items')->where('estado','=','Perdido')->get();
//        $dados=Item::with('encomendas');
//        $items=Encomenda::with('items');



        return view('home.index')->with(array('items' =>$items));
//        return view('home')->with(array('achados' =>$achados, 'perdidos' => $perdidos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
