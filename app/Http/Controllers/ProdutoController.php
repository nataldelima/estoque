<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista()
    {
        $html = '<h1>Lista de Produtos com Laravel</h1>';
        $html .= '<ul>';
        $produtos = DB::select('select * from produtos');
        foreach ($produtos as $p) {
            $html .= "<li>Nome: {$p->nome}, Descrição: {$p->descricao}</li>";
        }
        $html .= '</ul>';
        return $html;
    }
}
