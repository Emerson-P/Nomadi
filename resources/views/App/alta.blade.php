<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Destinos Turísticos</title>
</head>
<body>
    <h1>Destinos Turísticos</h1>
    <a href="/">Voltar</a>
    @foreach ($destinos as $destino)
        <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 15px;">
            <h2>{{ $destino->nome }}</h2>
            <p><strong>Localização:</strong> {{ $destino->localizacao }}</p>
            <p><strong>Descrição:</strong> {{ $destino->descricao }}</p>
            <p><strong>Atrações:</strong> {{ $destino->atracoes_turisticas }}</p>
            <p><strong>Preço:</strong> R$ {{ number_format($destino->precos, 2, ',', '.') }}</p>
            <p><strong>Hotéis:</strong> {{ $destino->hoteis }}</p>
            <p><strong>Pacotes:</strong> {{ $destino->pacotes_promocionais }}</p>
            <p><strong>Ida:</strong> {{ \Carbon\Carbon::parse($destino->dia_horario_ida)->format('d/m/Y H:i') }}</p>
            <p><strong>Volta:</strong> {{ \Carbon\Carbon::parse($destino->dia_horario_volta)->format('d/m/Y H:i') }}</p>

            <!-- @if ($destino->caminho_fotos)
                <img src="{{ asset($destino->caminho_fotos) }}" alt="{{ $destino->nome }}" style="max-width: 300px;">
            @endif -->

            @php
            $index = 0
            @endphp   
            @foreach ($favoritos as $favorito )
                @if ($destino->id == $favorito->viagens_id)
                     @php
                        $index = 1
                    @endphp     
                    @break
                @endif
            @endforeach
            @if ($index == 1 )
                <form action="{{ route('postRemoveFavorito', $favorito->id) }}" method="post">
                    @csrf
                    <button type="submit">
                        Remover Coração
                    </button>
                </form>
            @else
                <form action="{{ route('postAddFavorito', $destino->id) }}" method="post">
                    @csrf
                    <button type="submit">
                        Adiconar Coração
                    </button>
                </form>
            @endif

          
            @php
            $index = 0
            @endphp   
            @foreach ($carrinhos as $carrinho )
                @if ($destino->id == $carrinho->viagens_id)
                     @php
                        $index = 1
                    @endphp     
                    @break
                @endif
            @endforeach
            @if ($index == 1 )
               <a href="/carrinho">carrinho</a>
            @else
                <form action="{{ route('postAddCarrinho', $destino->id) }}" method="post">
                    @csrf
                    <button type="submit">
                        Add Carrinho
                    </button>
                </form>
            @endif
        </div>
    @endforeach
</body>
</html>