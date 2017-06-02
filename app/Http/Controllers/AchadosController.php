<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
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
                ->get();
            if ($items){
                foreach ($items as $item){
                    $output.='<p>'.
                        '<input type="checkbox" name="id[]" value="'.$item->id.'" id="indeterminate-checkbox"/>'.
                        '<label for="indeterminate-checkbox">'.$item->designacao.'</label>'.
                    '</p>';
                }
                return Response($output);
            }
    }
    }


    public function update(Request $request)
    {
        $ids=$request->id;
        Item::whereIn('id',$ids)->update(['estado'=>'Achado']);
    }

    public function destroy($id)
    {
        //
    }
}
