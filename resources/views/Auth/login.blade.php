<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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

    .login-container {
      background-color: #FFFFFF;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-container h1 {
      text-align: center;
      color: #14213D;
      margin-bottom: 2rem;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      color: #14213D;
    }

    input[type="email"], input[type="password"] {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #CCC;
      border-radius: 8px;
      margin-bottom: 1.5rem;
      font-size: 1rem;
    }

    .btn-login {
      width: 100%;
      background-color: #FCA311;
      color: #FFFFFF;
      padding: 0.75rem;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
    }

    .btn-login:hover {
      background-color: #e1900f;
    }

    .register-link {
      text-align: center;
      margin-top: 1rem;
    }

    .register-link a {
      color: #14213D;
      text-decoration: none;
    }

    .register-link a:hover {
      text-decoration: underline;
    }
    </style>

    @if ($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif

    
    <div class="login-container">
    <h1>Login</h1>
    <form action="/login" method="post">
        @csrf
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Senha</label>
      <input type="password" id="password" name="password" required>

      <button type="submit" class="btn-login">Entrar</button>
    </form>
    <div class="register-link">
      <p>Não tem uma conta? <a href="/cadastro">Cadastre-se</a></p>
    </div>

  </div>
</body>
</html>