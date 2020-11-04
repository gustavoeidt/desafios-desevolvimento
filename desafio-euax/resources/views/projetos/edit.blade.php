<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edição:') }} {{$projeto->projeto}}
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
                <form method="POST" action="/projetos/{{$projeto->id}}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="projetoNome">Nome do Projeto</label>
                    <input type="text" class="form-control" id="projetoNome" placeholder="Nome do Projeto" name="projeto" value="{{$projeto->projeto}}">
                    </div>
                    <div class="form-group">
                        <label for="projetoInicio">Início do Projeto</label>
                        <input type="date" class="form-control" id="projetoInicio" name="inicio" value="{{$projeto->inicio->format('Y-m-d')}}">
                    </div>
                    <div class="form-group">
                        <label for="projetoFinal">Prazo Final do Projeto</label>
                        <input type="date" class="form-control" id="projetoFinal" name="fim" value="{{$projeto->fim->format('Y-m-d')}}">
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Atualizar</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
