
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Agendamento</title>
</head>
<body>

    <h1>Editar Agendamento</h1>

    <a href="/agendamentos">Voltar para agendamentos</a>

    <form action="/agendamentos/atualizar/{{ $agendamento->id }}" method="POST">
        @csrf

        <label>Data do agendamento:</label>
        <input type="date" name="data_agendamento" value="{{ $agendamento->data_agendamento }}" required>

        <br><br>

        <label>Horário:</label>
        <input type="time" name="horario" value="{{ $agendamento->horario }}" required>

        <br><br>

        <button type="submit">Salvar alterações</button>
    </form>

</body>
</html>
