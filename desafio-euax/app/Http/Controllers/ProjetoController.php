<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // Lista dos projetos
    public function index()
    {
        // Lista os projetos filtrando pelo id do autor
        $user_id = Auth::id();
        $projetos = Projeto::latest()->where("user_id","=",$user_id)->paginate(5);
        return view('projetos.index', compact('projetos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // Novo projeto
    public function create()
    {
        return view('projetos.create');
    }

    // Armazena da DB o projeto vindo do $_POST
    public function store(Request $request)
    {
        // Validação dos campos requeridos
        // WIP: Data de fim não pode ser menor que a data de início
        $request->validate([
            'projeto' => 'required',
            'inicio' => 'required',
            'fim' => 'required'
        ]);

        $user_id = Auth::id();
        $request->request->add(['user_id' => $user_id]);

        // Cria o registro no banco de dados
        Projeto::create($request->all());

        // Redireciona para a página principal
        return redirect()->route('projetos.index')
            ->with('success', 'Projeto criado com sucesso!');
    }

    // Mostra os dados do projeto
    public function show(Projeto $projeto)
    {
        return view('projetos.show', compact('projeto'));
    }

    // Edita os dados do projeto
    public function edit(Projeto $projeto)
    {
        return view('projetos.edit', compact('projeto'));
    }

    // Atualiza os dados no banco
    public function update(Request $request, Projeto $projeto)
    {
        // WIP: Data de fim não pode ser menor que a data de início
        $request->validate([
            'projeto' => 'required',
            'inicio' => 'required',
            'fim' => 'required'
        ]);

        $projeto->update($request->all());

        return redirect()->route('projetos.index')
            ->with('success', 'O projeto foi atualizado com sucesso!');
    }

    public function destroy(Projeto $projeto)
    {
        // WIP: Adicionar prompt de confirmação
        $projeto->delete();

        return redirect()->route('projetos.index')
            ->with('success', 'Projeto removido com sucesso!');
    }
}
