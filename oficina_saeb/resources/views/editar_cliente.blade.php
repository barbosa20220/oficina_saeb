
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>
<body>

    <h1>Editar Cliente</h1>

    <a href="/clientes">Voltar para clientes</a>

    <form action="/clientes/atualizar/{{ $cliente->id }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $cliente->nome }}" required>

        <br><br>

        <label>CPF:</label>
        <input type="text" name="cpf" placeholder="Digite o CPF para atualizar">

        <br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone" value="{{ $cliente->telefone }}" required>

        <br><br>

        <label>E-mail:</label>
        <input type="email" name="email" value="{{ $cliente->email }}" required>

        <br><br>

        <label>Endereço:</label>
        <input type="text" name="endereco" value="{{ $cliente->endereco }}">

        <br><br>

        <button type="submit">Salvar alterações</button>
    </form>

</body>
</html>
