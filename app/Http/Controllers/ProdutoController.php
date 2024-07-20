<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = DB::select('select * from produtos');
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id)
    {

        $resposta = DB::select('select * from produtos where id = ?', [$id]);

        if (empty($resposta)) {
            return "Esse produto não existe!";
        }
        return view('produto.detalhes')->with('p', $resposta[0]);
    }
}
