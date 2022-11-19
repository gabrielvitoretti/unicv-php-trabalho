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
  <section style="text-align: center;">
    <h1>{{ $usuarios->nome }}</h1>
    <p>Código: {{ $usuarios->id }}</p>
    <p>Nome: {{ $usuarios->nome }}</p>
    <p>Idade: {{ $usuarios->idade }}</p>
    <p>Telefone: {{ $usuarios->telefone }}</p>
    <p>E-mail: {{ $usuarios->email }}</p>
    <p><a href="/usuarios" class="btn btn-success">Voltar</a></p>
  </section>
</body>

</html>