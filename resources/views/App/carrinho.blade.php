<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Carrinho</h1>
    <a href="/">Voltar</a>
    @foreach ($carrinhos as $carrinho )
    <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 15px;">

    <h3>{{ $carrinho->viagem->nome }}</h3>
    <h3>{{ $carrinho->viagem->descricao }}</h3>
    <h3>{{ $carrinho->viagem->precos }}</h3>
    <h3>{{ $carrinho->quantidade }}</h3>
    </div>
    @endforeach
</body>
</html>