
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Oficina</title>
</head>
<body>

    <h1>Sistema de Oficina Mecânica</h1>
    @if (session('erro'))
    <p style="color: red;">{{ session('erro') }}</p>
@endif

    <form action="/entrar" method="POST">
        @csrf

        <label>E-mail:</label>
        <input type="email" name="email" required>

        <br><br>

        <label>Senha:</label>
        <input type="password" name="senha" required>

        <br><br>

        <button type="submit">Entrar</button>
    </form>

</body>
</html>
