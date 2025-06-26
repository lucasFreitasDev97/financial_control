@extends('layouts.default')
@section('main')
    <br>
    <div class="container">
        <div style="text-align: center">
            <h2>Categorias</h2>
        </div>
        <div>
            <a href="{{route('categories.form')}}">
                <button type="button" class="btn btn-dark">+ Criar nova categoria</button>
            </a>
        </div>
        <br>
        <table class="table table-bordered table-sm">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>
                        @if($category->type == 'income')
                            Entrada
                        @endif
                        @if($category->type == 'expense')
                            Saída
                        @endif
                    </td>
                    <td>
                        <a style="text-decoration: none" href="{{route('categories.form', ['category' => $category])}}">Editar</a>
                        |
                        <a style="text-decoration: none" href="{{route('categories.destroy', ['category' => $category])}}">
                            <span style="color: red">Excluir</span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
