@extends('layouts.default')
@section('main')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">
                        Registrar Categoria
                    </h4>
                    <form action="@if($category) {{route('categories.update', ['category' => $category])}} @else {{route('categories.store')}} @endif" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" @if($category) value="{{$category->name}}" @endif name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Tipo</label>
                            <select class="form-select" id="type" name="type" required>
                                <option value="">Selecione</option>
                                <option value="income" @if($category && $category->type == 'income') selected @endif>Entrada</option>
                                <option value="expense" @if($category && $category->type == 'expense') selected @endif>Saída</option>
                            </select>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
