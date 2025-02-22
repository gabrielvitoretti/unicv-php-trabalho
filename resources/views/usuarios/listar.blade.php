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
  <h1 style="text-align: center;">Listagem de Usuários</h1>
  @if (session('mensagem'))
  <div class="alert alert-success" role="alert">{{ session('mensagem') }}</div>
  @endif
  <section>
    <div class="container">
      <p><a href="/usuarios/novo" class="btn btn-dark">Novo Usuário</a></p>
      <table class="table">
        <thead>
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Opções</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuarios as $usuario)
          <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nome }}</td>
            <td>{{ $usuario->idade }}</td>
            <td>{{ $usuario->telefone }}</td>
            <td>{{ $usuario->email }}</td>
            <td>
              <a href="/usuarios/{{ $usuario->id }}" class="btn btn-info">Visualizar</a>
              <a href="/usuarios/editar/{{ $usuario->id }}" class="btn btn-warning">Editar</a>
              <a href="/usuarios/excluir/{{ $usuario->id }}" class="btn btn-danger">Excluir</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
</body>

</html>