<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Atividade;
use App\Models\Projeto;

use Illuminate\Http\Request;

class AtividadeController extends Controller
{
    //
    public function index()
    {
        // Lista os projetos filtrando pelo id do autor
        $user_id = Auth::id();
        $atividades = Atividade::all();
        return view('atividades.index', compact('atividades'));
    }

    // Mostra os dados do projeto
    public function show(int $id)
    {
        $projeto = Projeto::find($id);
        return view('atividades.show', compact('projeto'));
    }

    // Novo projeto
    public function create(int $id)
    {
        return view('atividades.create',compact('id'));
    }

    // Armazena da DB a atividade vindo do $_POST
    public function store(Request $request)
    {
        // Validação dos campos requeridos
        $request->validate([
            'atividade' => 'required',
            'inicio' => 'required',
            'fim' => 'required',
            'projeto_id' => 'required'
        ]);

        // Cria o registro no banco de dados
        Atividade::create($request->all());

        // Redireciona para a página principal
        return redirect('atividades/'.$request->input('projeto_id'))
            ->with('success', 'Atividade criada com sucesso!');
    }

    // Edita os dados da atividade
    public function edit(Atividade $atividade)
    {
        
        return view('atividades.edit', compact('atividade'));
    }

    // Atualiza os dados no banco
    public function update(Request $request, Atividade $atividade)
    {
        $request->validate([
            'atividade' => 'required',
            'inicio' => 'required',
            'fim' => 'required',
            'projeto_id' => 'required'
        ]);

        $atividade->update($request->all());

        return redirect('atividades/'.$request->input('projeto_id'))
            ->with('success', 'A atividade foi atualizada com sucesso!');
    }

    public function destroy(Atividade $atividade)
    {
        $id = $atividade->projeto->id;
        $atividade->delete();

        return redirect('atividades/'.$id)
            ->with('success', 'Atividade apagada com sucesso!');
    }
}
