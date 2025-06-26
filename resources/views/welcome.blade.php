@extends('layouts.default')
@section('main')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Filtrar Transações</h4>
                    <form action="#" method="GET">
                        <div class="mb-3">
                            <label for="mes" class="form-label">Mês</label>
                            <select class="form-select" id="mes" name="mes" required>
                                <option value="">Selecione</option>
                                @foreach (['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'] as $i => $mes)
                                    <option value="{{ $i + 1 }}">{{ $mes }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="year" class="form-label">Ano</label>
                            <input type="number" class="form-control" id="year" name="year" required>
                        </div>

                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoria</label>
                            <select class="form-select" id="categoria" name="categoria">
                                <option value="">Todas</option>
{{--                                @foreach ($categorias as $categoria)--}}
{{--                                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>--}}
{{--                                @endforeach--}}
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <select class="form-select" id="tipo" name="tipo">
                                <option value="">Todos</option>
                                <option value="entrada">Entrada</option>
                                <option value="saida">Saída</option>
                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">Filtrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div style="text-align: center">
            <h2>Resultados - Mês / Ano</h2>
        </div>
        <table class="table table-bordered table-sm">
            <thead>
            <tr>
                <th>Transação</th>
                <th>Categoria</th>
                <th>Tipo</th>
                <th>Documento / Comprovante</th>
                <th>Data</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
