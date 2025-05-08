<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>

    @if ($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="/cadastro">
        @csrf

        <label for="nome_completo">Nome Completo:</label><br>
        <input type="text" name="nome_completo" id="nome_completo" required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label><br>
        <input type="date" name="data_nascimento" id="data_nascimento" required><br><br>

        <label for="nacionalidade">Nacionalidade:</label><br>
        <input type="text" name="nacionalidade" id="nacionalidade" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" name="telefone" id="telefone" required><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf" id="cpf" required><br><br>

        <label for="endereco">Endereço:</label><br>
        <input type="text" name="endereco" id="endereco" required><br><br>

        <label for="passaporte">Passaporte:</label><br>
        <input type="text" name="passaporte" id="passaporte"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Senha:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <button type="submit">Cadastrar</button>

    </form>
    
</body>
</html>