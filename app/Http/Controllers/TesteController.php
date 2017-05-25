<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function testar()
    {
        $designacao = Input::get('designacao');
        $total = count($designacao);
        dd($total);
    }

}
