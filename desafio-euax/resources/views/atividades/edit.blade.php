<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edição:') }} {{$atividade->atividade}}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3 px-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="/atividades/{{$atividade->id}}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="atividadeNome">Nome da Atividade</label>
                        <input type="text" class="form-control" id="atividadeNome" placeholder="Nome da Atividade" name="atividade" value="{{$atividade->atividade}}">
                    </div>
                    <div class="form-group">
                        <label for="projetoInicio">Início da Atividade</label>
                        <input type="date" class="form-control" id="projetoInicio" name="inicio" value="{{$atividade->inicio->format('Y-m-d')}}">
                    </div>
                    <div class="form-group">
                        <label for="projetoFinal">Prazo Final da Atividade</label>
                        <input type="date" class="form-control" id="projetoFinal" name="fim" value="{{$atividade->fim->format('Y-m-d')}}">
                    </div>
                    <div class="form-check my-3">
                        <input class="form-check-input" type="hidden" name="finalizada" value="0">
                        <input class="form-check-input" type="checkbox" {{$atividade->finalizada ? 'checked' : ''}} id="finalizadaCheck" name="finalizada" value="1">
                        <label class="form-check-label" for="finalizadaCheck">
                          Atividade Finalizada
                        </label>
                    </div>
                    <input type="hidden" value="{{$atividade->projeto_id}}" name="projeto_id">
                    <button type="submit" class="btn btn-primary my-3">Atualizar</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
