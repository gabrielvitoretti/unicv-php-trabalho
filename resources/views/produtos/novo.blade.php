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
    <h1>Novo Produto</h1>
    @if ($errors->any())
    <ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif

    <form action="/usuarios/salvar" method="post" class="p-5">
        @csrf
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao" value="{{ old('descricao') }}">
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" class="form-control" name="preco" value="{{ old('preco') }}">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="text" class="form-control" name="quantidade" value="{{ old('quantidade') }}">
        </div>
        <input type="submit" class="btn btn-success mt-5" value="Cadastrar">
    </form>
  </body>
</html>