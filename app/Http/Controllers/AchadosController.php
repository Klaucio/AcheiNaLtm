<?php

namespace App\Http\Controllers;

use App\Item;
use App\Levantamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AchadosController extends Controller
{

    public function index()
    {
        return view('admin.achados.index');
    }

    public function create()
    {
        return view('admin.achados.create');
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //
    }


    public function edit(Request $request)
    {
        if ($request->ajax()){
            $output="";
            $items = DB::table('items')
                ->where('bagagem_id','=',$request->search)
                ->where('estado','=',null)
                ->join('bagagems', 'items.bagagem_id', '=', 'bagagems.id')
                ->join('rota_utentes', 'bagagems.rota_utente_id', '=', 'rota_utentes.id')
                ->select('items.*', 'rota_utentes.utente_id as utente_id')
                ->get();
            if ($items){
                foreach ($items as $item){

                    $output.='<tr>'.
                                    '<td>'.$item->designacao.'</td>'.
                                    '<td> <input type="checkbox" name="id[]" value="'.$item->id.'"></td>'.
                                 '</tr>'.
                        '<td><input type="hidden" class="form-control" data-bs-table-unique-id="2" id="utente_id" name="utente_id" value="'.$item->utente_id.'"></td>'.
                        '<td><input type="hidden" class="form-control" data-bs-table-unique-id="2" id="bagagem_id" name="bagagem_id" value="'.$item->bagagem_id.'"></td>';
//
                }
                return Response($output);
            }
    }
    }


    public function update(Request $request)
    {

//        dd($request->utente_id);
        $ids=$request->id;
        Item::whereIn('id',$ids)->update(['estado'=>'Achado']);
    }

    public function destroy($id)
    {
        //
    }
}
