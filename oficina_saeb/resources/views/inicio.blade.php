
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial - Oficina</title>
</head>
<body>

    <h1>Sistema de Oficina Mecânica</h1>

    <h2>Bem-vindo ao sistema!</h2>

    <p>Usuário: {{ session('usuario') }}</p>

    <h3>Menu principal</h3>

    <ul>
        <li><a href="/clientes">Gerenciar Clientes</a></li>
        <li><a href="/veiculos">Gerenciar Veículos</a></li>
        <li><a href="/agendamentos">Gerenciar Agendamentos</a></li>
    </ul>
    <form action="/sair" method="POST">
    @csrf
    <button type="submit">Sair do sistema</button>
</form>

</body>
</html>
