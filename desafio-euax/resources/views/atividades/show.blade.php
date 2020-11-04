<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Atividades:') }} {{$projeto->projeto}}
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

                <a href="/atividades/create/{{$projeto->id}}"><button class="btn btn-primary mb-3" type="submit">+ Adicionar Atividade</button></a>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome do Projeto</th>
                            <th scope="col">Data de Início</th>
                            <th scope="col">Data de Fim</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Listagem de Atividades -->
                        @foreach ($projeto->atividades as $atividade)
                            <tr>
                                <th scope="row">{{ $atividade->id }}</th>
                                <td><a href="/atividades/{{$atividade->id}}/edit">{{ $atividade->atividade }}</a></td>
                                <td>{{ $atividade->inicio->format('d/m/Y') }}</td>
                                <td>{{ $atividade->fim->format('d/m/Y') }}</td>
                                <td></td>
                                <td>
                                    <form action="/atividades/{{$atividade->id}}" method="POST" >
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
