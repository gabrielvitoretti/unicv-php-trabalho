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
  <section>
    <div class="container">
      <h1 style="margin-left: 4%">Editar Usuário</h1>
      @if ($errors->any())
      <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
      @endif

      <form action="/usuarios/gravar/{{ $usuarios->id }}" method="post" class="p-5">
        @csrf
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" name="nome" value="{{ $usuarios->nome }}">
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="text" class="form-control" name="email" value="{{ $usuarios->email }}">
        </div>
        <div class="form-group">
          <label for="idade">Idade</label>
          <input type="number" class="form-control" name="idade" value="{{ $usuarios->idade }}">
        </div>
        <div class="form-group">
          <label for="telefone">Telefone</label>
          <input type="number" class="form-control" name="telefone" value="{{ $usuarios->telefone }}">
        </div>
        <input type="submit" class="btn btn-success mt-5" value="Salvar">
      </form>
    </div>
  </section>
</body>

</html>