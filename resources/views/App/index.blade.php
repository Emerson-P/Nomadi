<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nomadi - Página Inicial</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    button {
      padding: 0.5rem 1rem;
      background-color: #FCA311;
      color: #FFFFFF;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
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

    .trip-card {
      background-color: #FFFFFF;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 2rem;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .trip-card img {
      width: 100%;
      height: auto;
      object-fit: cover;
    }

    .trip-content {
      padding: 1rem;
    }

    .trip-content h2 {
      color: #14213D;
      margin-bottom: 0.5rem;
    }

    .trip-content p {
      color: #000000;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">Nomadi</div>
    <form action="{{ route('getPesquisa') }}" method="GET" class="search-bar">
        <input type="text" name="busca" placeholder="Pesquisar viagens..." required>
        <button type="submit">Buscar</button>
    </form>
    <nav>
      <a href="/alta">Principais viagens</a>
      <a href="/favoritos">Viagens favoritas</a>
      <a href="/carrinho">Carrinho</a>
      <a href="/quemSomos">Quem somos</a>
    </nav>
  </header>
  <main>
    <section class="trip-card">
      <img src="assets/imagens/viagem1.jpg" alt="Praia Tropical">
      <div class="trip-content">
        <h2>Praia Tropical</h2>
        <p>Relaxe em uma praia paradisíaca com águas cristalinas e areia branca. Ideal para quem busca tranquilidade e sol.</p>
      </div>
    </section>

    <section class="trip-card">
      <img src="assets/imagens/viagem2.jpg" alt="Montanhas Nevadas">
      <div class="trip-content">
        <h2>Montanhas Nevadas</h2>
        <p>Uma experiência inesquecível entre as montanhas com vistas deslumbrantes e atividades na neve.</p>
      </div>
    </section>

    <section class="trip-card">
      <img src="assets/imagens/viagem3.jpg" alt="Cidade Histórica">
      <div class="trip-content">
        <h2>Cidade Histórica</h2>
        <p>Explore ruas de paralelepípedo, arquitetura antiga e cultura rica em uma das cidades mais encantadoras do mundo.</p>
      </div>
    </section>
  </main>
</body>
</html>
