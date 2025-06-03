<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
    <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #E5E5E5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .register-container {
      background-color: #FFFFFF;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
      overflow-y: auto;
    }

    .register-container h1 {
      text-align: center;
      color: #14213D;
      margin-bottom: 2rem;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      color: #14213D;
    }

    input[type="text"],
    input[type="date"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #CCC;
      border-radius: 8px;
      margin-bottom: 1rem;
      font-size: 1rem;
    }

    .btn-register {
      width: 100%;
      background-color: #FCA311;
      color: #FFFFFF;
      padding: 0.75rem;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
    }

    .btn-register:hover {
      background-color: #e1900f;
    }

    .login-link {
      text-align: center;
      margin-top: 1rem;
    }

    .login-link a {
      color: #14213D;
      text-decoration: none;
    }

    .login-link a:hover {
      text-decoration: underline;
    }
  </style>

    <div class="register-container">
        <h1>Cadastro</h1>
        <form action="/cadastro" method="post">
            @csrf
        <label for="nome">Nome Completo</label>
        <input type="text" id="nome" name="nome_completo" required>

        <label for="data">Data de Nascimento</label>
        <input type="text" id="data" name="data_nascimento" placeholder="dd/mm/aaaa" required>

        <label for="nacionalidade">Nacionalidade</label>
        <input type="text" id="nacionalidade" name="nacionalidade" required>

        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" required>

        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" required>

        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" required>

        <label for="passaporte">Passaporte</label>
        <input type="text" id="passaporte" name="passaporte">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit" class="btn-register">Cadastrar</button>
        </form>
        <div class="login-link">
        <p>Já tem uma conta? <a href="/login">Faça login</a></p>
        </div>
    </div>

    
</body>
</html>