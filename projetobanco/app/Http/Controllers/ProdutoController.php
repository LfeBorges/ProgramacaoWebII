<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Produto;
use Exception;
use Illuminate\Support\Facades\Log;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::with('categoria')->get();
        return view("produtos.index", compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view("produtos.create", compact("categorias"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            Produto::create($request->all());
            return redirect()->route('produtos.index')
                ->with('sucesso', 'Produto inserido com sucesso!');

        } catch (Exception $e){
            Log::error("Erro ao criar o produto: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(), 
                'request' => $request->all()
            ]);
            return redirect()->route('produtos.index')
                ->with('erro', 'Erro ao criar o produto!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Produto::finOrFail($id);
        $produto->edit($request->all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produto::finOrFail($id);
        $produto->edit($request->all());
        return view("produtos.index", compact('produtos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $produto = Produto::finOrFail($id);
            $produto->update($request->all());
            return redirect()->route('produtos.index')
                ->with('sucesso', 'Produto alterado com sucesso!');
        } catch (Exception $e) { 
            Log::erro("Erro ao atualizar o produto: ". $e->getMessage(),[
                'stack' => $e->getTraceAsString(),
                'produto_id' => $id,
                'request' => $request->all() 
            ]);
            return redirect()->route('produtos.index')->with('Erro ao digitar!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            try{
                $produto = Produto::finOrFail($id);
                $produto->delete($request->all());
                return redirect()->route('produtos.index')
                    ->with('sucesso', 'Produto excluido com sucesso!');
            } catch (Exception $e) { 
                Log::erro("Erro ao excluir o produto: ". $e->getMessage(),[
                    'stack' => $e->getTraceAsString(),
                    'produto_id' => $id
                ]);
                return redirect()->route('produtos.index')->with('Erro ao excluir!');
            }
        }
    }
}
