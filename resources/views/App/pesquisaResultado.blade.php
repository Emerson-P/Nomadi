<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados da Pesquisa - TravelSite</title>
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

    .search-title {
      margin-bottom: 2rem;
      color: #14213D;
    }

    .search-result {
      background-color: #FFFFFF;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 1.5rem;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .search-result img {
      width: 100%;
      height: auto;
      object-fit: cover;
    }

    .result-info {
      padding: 1rem;
    }

    .result-info h3 {
      color: #14213D;
      margin-bottom: 0.5rem;
    }

    .result-info p {
      margin: 0.25rem 0;
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

    button {
      padding: 0.5rem 1rem;
      background-color: #FCA311;
      color: #FFFFFF;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">TravelSite</div>
    
    
    <form action="{{ route('getPesquisa') }}" method="GET" class="search-bar">
        <input type="text" name="busca" placeholder="Pesquisar viagens..." required>
        <button type="submit">Buscar</button>
    </form>

    <nav>
      <a href="/">Principais viagens</a>
      <a href="/favoritos">Viagens favoritas</a>
      <a href="/carrinho">Carrinho</a>
      <a href="/quemSomos">Quem somos</a>
    </nav>
  </header>

  <main>
    <h2 class="search-title">Resultados para "{{ $termo }}"</h2>

    @foreach ($viagens as $viagen )

        <div class="search-result">
            <img src="assets/imagens/praia1.jpg" alt="Praia 1">
            <div class="result-info">
                <h3>{{ $viagen->nome }}</h3>
                <p>Localização: {{ $viagen->localizacao }}</p>
                <p>Pacote: {{ $viagen->pacotes_promocionais }}</p>
                <p>Preço: {{ $viagen->precos }}</p>
            </div>
            <div class="trip-actions">
            @php
            $index = 0
            @endphp   
            @foreach ($favoritos as $favorito )
                @if ($viagen->id == $favorito->viagens_id)
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
                <form action="{{ route('postAddFavorito', $viagen->id) }}" method="post">
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
                @if ($viagen->id == $carrinho->viagens_id)
                     @php
                        $index = 1
                    @endphp     
                    @break
                @endif
            @endforeach
            @if ($index == 1 )
               <a href="/carrinho">carrinho</a>
            @else
                <form action="{{ route('postAddCarrinho', $viagen->id) }}" method="post">
                    @csrf
                    <button type="submit">
                        Add Carrinho
                    </button>
                </form>
            @endif
        </div>
        </div>

    @endforeach
    

    
  </main>
</body>
</html>