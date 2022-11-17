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
    <h1>{{ $usuario->nome }}</h1>
    <p>Código: {{ $usuario->id }}</p>
    <p>E-mail: {{ $usuario->email }}</p>
    <p>Idade: {{ $usuario->idade }}</p>
    <p>Telefone: {{ $usuario->telefone }}</p>
    <p><a href="/usuarios" class="btn btn-success">Voltar</a></p>
  </body>
</html>