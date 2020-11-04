<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projetos') }}
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
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome do Projeto</th>
                            <th scope="col">Data de Início</th>
                            <th scope="col">Data de Fim</th>
                            <th scope="col">Atividades</th>
                            <th scope="col">Andamento</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Listagem de Projetos -->
                        @foreach ($projetos as $projeto)
                            <tr>
                                <th scope="row">{{ $projeto->id }}</th>
                                <td><a href="/projetos/{{ $projeto->id }}/edit">{{ $projeto->projeto }}</a></td>
                                <td>{{ $projeto->inicio->format('d/m/Y') }}</td>
                                <td>{{ $projeto->fim->format('d/m/Y') }}</td>
                                <td><a href="/atividades/{{ $projeto->id }}">Gerenciar Atividades</a></td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar progress-bar-striped" role="progressbar" style="width:{{$projeto->progresso()}}%" >{{$projeto->progresso()}}%</div>
                                    </div>
                                    <p class="text-center {{$projeto->atrasado() ? 'text-danger' : 'text-success'}}"><strong>{{$projeto->atrasado() ? 'Haverá atraso' : 'Em dia'}}</strong></p>
                                    
                                </td>
                                <td>
                                    <form action="/projetos/{{ $projeto->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Apagar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
