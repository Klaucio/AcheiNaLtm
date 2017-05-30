<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function testar(Request $request)
    {
        $designacao=$request->designacao;
        dd($designacao);
//        dd($total);
    }

}
