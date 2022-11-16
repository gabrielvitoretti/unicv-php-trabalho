<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Padrão</title>
    <link href="/bootstrap.css" rel="stylesheet">
    <script src="/bootstrap.js"></script>
  </head>
  <body>
    <h1>Listagem de Produtos</h1>
    @if (session('mensagem'))
    <div class="alert alert-success" role="alert">{{ session('mensagem') }}</div>
    @endif

    <p><a href="/usuarios/novo" class="btn btn-dark">Novo Produto</a></p>
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Descrição</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>
                  <a href="/usuarios/{{ $produto->id }}" class="btn btn-info">Visualizar</a>
                  <a href="/usuarios/editar/{{ $produto->id }}" class="btn btn-warning">Editar</a>
                  <a href="/usuarios/excluir/{{ $produto->id }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </body>
</html>