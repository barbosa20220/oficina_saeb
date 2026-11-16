<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Clientes - Oficina</title>
</head>
<body>

    <h1>Gerenciamento de Clientes</h1>

    <a href="/inicio">Voltar ao início</a>

    <h2>Pesquisar clientes</h2>

    <form action="/clientes" method="GET">
        <input type="text" name="pesquisa"
            placeholder="Digite o nome do cliente">

        <button type="submit">Pesquisar</button>
    </form>

    <h2>Lista de clientes</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>

        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td>{{ $cliente->email }}</td>
            <td>
                <a href="/clientes/editar/{{ $cliente->id }}">Editar</a>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>