<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quem Somos - Nomadi</title>
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
    button {
      padding: 0.5rem 1rem;
      background-color: #FCA311;
      color: #FFFFFF;
      border: none;
      border-radius: 8px;
      cursor: pointer;
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
      min-height: 80vh;
    }

    .about-container {
      background-color: #FFFFFF;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      max-width: 800px;
      margin: auto;
    }

    .about-container h1 {
      color: #14213D;
      margin-bottom: 1rem;
    }

    .about-container p {
      margin-bottom: 1rem;
      line-height: 1.6;
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
      <a href="/">Principais viagens</a>
      <a href="/favoritos">Viagens favoritas</a>
      <a href="/carrinho">Carrinho</a>
      <a href="/quemSomos" style="color: #FCA311">Quem somos</a>
    </nav>
  </header>

  <main>
    <div class="about-container">
      <h1>Sobre o Projeto</h1>
      <p>O <strong>Nomadi</strong> é um projeto acadêmico desenvolvido como parte do curso de graduação em Sistemas de Informação. O objetivo principal do projeto é simular uma plataforma de viagens online, permitindo que usuários explorem destinos turísticos, favoritem viagens, adicionem pacotes ao carrinho e efetuem cadastro/login.</p>
      <p>Este projeto foi construído utilizando o framework <strong>Laravel</strong>, uma poderosa ferramenta PHP para desenvolvimento web, reconhecida por sua elegância e estrutura robusta. O backend é integrado a um banco de dados <strong>MySQL</strong>, garantindo persistência de dados como informações de usuários, destinos, pacotes e reservas.</p>
      <p>Além do backend funcional, desenvolvemos um frontend com HTML, CSS e JavaScript, aplicando conceitos de responsividade, design moderno e acessibilidade.</p>
      <p>O sistema contempla autenticação de usuários, gerenciamento de pacotes turísticos e funcionalidades interativas como favoritar viagens e montar o carrinho de compras.</p>
      <p>Este projeto tem como propósito aplicar na prática os conhecimentos adquiridos em sala de aula e servir como base para futuras integrações com APIs externas e serviços de pagamento.</p>
    </div>
  </main>
</body>
</html>