<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $devlist = DB::table('encomendas')
//            ->select(DB::raw('MONTHNAME(updated_at) as month'), DB::raw("DATE_FORMAT(updated_at,'%Y-%m') as monthNum"), DB::raw('count(*) as encomendas'))
//            ->groupBy('monthNum')
//            ->get();

        return view('admin.items.estatisticas');
//        return response()->json($devlist);

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
    public function getChart(){
//        $devlist = array(1,2,3);
        $encomendas = DB::table('encomendas')
            ->select(DB::raw('MONTHNAME(created_at) as month'), DB::raw("DATE_FORMAT(created_at,'%Y-%m') as monthNum"), DB::raw('count(*) as encomendas'))
            ->groupBy('monthNum')->get();

//        return view('chartjs')
//            ->with('viewer',$devlist);
//        return $devlist;

//        return response()->json([
//            'jan' => 80,
//            'jan_confirmados' =>30
//        ]);

        return response()->json($encomendas);
    }
    public function getChart1(){
//        $devlist = array(1,2,3);
        $encomendas = Item::where('estado','<>', 'NULL')
            ->where('encomenda_id','<>','Null')->count();
        $bagagens = Item::where('estado','<>', 'NULL')
            ->where('bagagens_id','<>','Null')->count();


        return response()->json($encomendas,$bagagens);
    }
    public function getGlobal(){
//

        return view('admin.items.global');
    }
}
