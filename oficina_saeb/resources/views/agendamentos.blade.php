
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agendamentos - Oficina</title>
</head>
<body>

    <h1>Gerenciamento de Agendamentos</h1>

    <a href="/inicio">Voltar ao início</a>

    <h2>Lista de agendamentos</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Veículo</th>
            <th>Placa</th>
            <th>Serviço</th>
            <th>Data</th>
            <th>Horário</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>

        @foreach ($agendamentos as $agendamento)
        <tr>
            <td>{{ $agendamento->id }}</td>
            <td>{{ $agendamento->cliente }}</td>
            <td>{{ $agendamento->marca }} {{ $agendamento->modelo }}</td>
            <td>{{ $agendamento->placa }}</td>
            <td>{{ $agendamento->servico }}</td>
            <td>{{ $agendamento->data_agendamento }}</td>
            <td>{{ $agendamento->horario }}</td>
            <td>{{ $agendamento->status }}</td>
            <td>
                <a href="/agendamentos/editar/{{ $agendamento->id }}">Editar</a>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>
