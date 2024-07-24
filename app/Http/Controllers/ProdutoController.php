<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutosRequest;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id)
    {
        $produto = Produto::find($id);
        if (empty($produto)) {
            return "Esse produto não existe!";
        }
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona(ProdutosRequest $request)
    {

        Produto::create($request->all());

        return redirect()->action([ProdutoController::class, 'lista'])->with('mensagem', 'Produto ' . $request->nome . ' adicionado com sucesso!');
    }

    public function listaJson()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function remove($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action([ProdutoController::class, 'lista']);
    }

    public function edita($id)
    {
        $produto = Produto::find($id);
        return view('produto.editar', compact('produto'));
    }
    public function atualiza(ProdutosRequest $request, $id)
    {
        // Atualização do produto
        $produto = Produto::findOrFail($id);
        $produto->update($request->all());

        return redirect()->action([ProdutoController::class, 'lista']);
    }
}
