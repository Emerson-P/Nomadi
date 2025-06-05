<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Principais Viagens - Nomadi</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #FFFFFF;
      color: #000000;
    }

    header {
      background-color: #14213D;
      padding: 1rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .logo {
      color: #FCA311;
      font-size: 1.5rem;
      font-weight: bold;
    }

    .search-bar input {
      padding: 0.5rem;
      border-radius: 8px;
      border: none;
      font-size: 1rem;
    }

    nav {
      display: flex;
      gap: 1.5rem;
    }

    nav a {
      color: #FFFFFF;
      text-decoration: none;
      font-weight: 500;
    }

    nav a:hover {
      color: #FCA311;
    }

    main {
      padding: 2rem;
      background-color: #E5E5E5;
    }

    .trip-destination {
      background-color: #FFFFFF;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 2rem;
      overflow: hidden;
    }

    .trip-destination img {
      width: 100%;
      height: auto;
      object-fit: cover;
    }

    .trip-details {
      padding: 1rem;
    }

    .trip-details h2 {
      color: #14213D;
      margin-bottom: 0.5rem;
    }

    .trip-details p {
      margin: 0.3rem 0;
    }

    .trip-actions {
      display: flex;
      justify-content: flex-end;
      gap: 1rem;
      padding: 1rem;
    }

    .trip-actions button {
      padding: 0.5rem 1rem;
      background-color: #FCA311;
      color: #FFFFFF;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .trip-actions button:hover {
      background-color: #e1900f;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">Nomadi</div>
    <div class="search-bar">
      <input type="text" placeholder="Pesquisar destinos...">
    </div>
    <nav>
      <a href="/alta">Principais viagens</a>
      <a href="/favoritos" style="color: #FCA311;">Viagens favoritas</a>
      <a href="/carrinho">Carrinho</a>
      <a href="/quemSomos">Quem somos</a>
    </nav>
  </header>

  <main>
    <!-- {{ $favoritos }} -->
    @foreach ($favoritos as $destino )
    <div class="trip-destination">

    <!-- <img src="assets/imagens/praia-tropical.jpg" alt="Praia Tropical"> -->
        <div class="trip-details">
            
            <h2>{{ $destino->viagem->nome }}</h2>
            <p><strong>Localização:</strong> {{ $destino->viagem->localizacao }}</p>
            <p><strong>Descrição:</strong> {{ $destino->viagem->descricao }}</p>
            <p><strong>Atrações:</strong> {{ $destino->viagem->atracoes_turisticas }} </p>
            <p><strong>Preço:</strong> R$ {{ number_format($destino->viagem->precos, 2, ',', '.') }}</p>
            <p><strong>Hotéis:</strong> {{ $destino->viagem->hoteis }}</p>
            <p><strong>Pacotes:</strong>  {{ $destino->viagem->pacotes_promocionais }}</p>
            <p><strong>Ida: </strong> {{ \Carbon\Carbon::parse($destino->viagem->dia_horario_ida)->format('d/m/Y H:i') }}</p>
            <p><strong>Volta: </strong>{{ \Carbon\Carbon::parse($destino->viagem->dia_horario_volta)->format('d/m/Y H:i') }}</p>
        </div>
        <div class="trip-actions">
            @php
            $index = 0
            @endphp   
            @foreach ($favoritos as $favorito )
          
                @if ($destino->viagens_id == $favorito->viagens_id)
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
        </div>
    @endforeach
    </div>
  </main>
</body>
</html>