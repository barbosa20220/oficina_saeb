<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Veículos - Oficina</title>
</head>
<body>

    <h1>Cadastro de Veículos</h1>

    <a href="/inicio">Voltar ao início</a>

    <h2>Cadastrar veículo</h2>

    <form action="/veiculos/cadastrar" method="POST">
        @csrf

        <label>Cliente:</label>
        <select name="cliente_id" required>
            <option value="">Selecione um cliente</option>

            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">
                    {{ $cliente->nome }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label>Marca:</label>
        <input type="text" name="marca" required>

        <br><br>

        <label>Modelo:</label>
        <input type="text" name="modelo" required>

        <br><br>

        <label>Placa:</label>
        <input type="text" name="placa" required>

        <br><br>

        <label>Ano:</label>
        <input type="number" name="ano" required>

        <br><br>

        <label>Cor:</label>
        <input type="text" name="cor" required>

        <br><br>

        <button type="submit">Cadastrar veículo</button>
    </form>

</body>
</html>