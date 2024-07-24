<?php

namespace App\Http\Controllers;

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

    public function adiciona(Request $request)
    {
        Produto::create($request->all());

        return redirect()->action([ProdutoController::class, 'lista'])->withInput($request->only('nome'));
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
    public function atualiza(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'valor' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);

        // Atualização do produto
        $produto = Produto::findOrFail($id);
        $produto->update($validatedData);
        return redirect()->action([ProdutoController::class, 'lista']);
    }
}
