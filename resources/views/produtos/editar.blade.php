<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Padrão</title>
    <link href="/bootstrap.css" rel="stylesheet">
    <script src="/bootstrap.js"></script>
  </head>
  <body class="p-5">
    <h1>Editar Usuário</h1>
    @if ($errors->any())
    <ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif

    <form action="/usuarios/gravar/{{ $usuario->id }}" method="post" class="p-5">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{ $usuario->nome }}">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" name="email" value="{{ $usuario->email }}">
        </div>
        <div class="form-group">
            <label for="idade">Idade</label>
            <input type="number" class="form-control" name="idade" value="{{ $usuario->idade }}">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="number" class="form-control" name="telefone" value="{{ $usuario->telefone }}">
        </div>
        <input type="submit" class="btn btn-success mt-5" value="Salvar">
    </form>
  </body>
</html>