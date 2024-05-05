<!DOCTYPE html>
<html>
<head>
    <title>Dades del Lloguer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            width: 50%; 
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Dades del Lloguer</h1>
    <table>
        <tbody>
            <tr>
                <th>DNI del Client</th>
                <td>{{ $lloga->dni_client }}</td>
            </tr>
            <tr>
                <th>Matricula del Automovil</th>
                <td>{{ $lloga->matricula_auto }}</td>
            </tr>
            <tr>
                <th>Data del Prestec</th>
                <td>{{ $lloga->data_prestec }}</td>
            </tr>
            <tr>
                <th>Data de Devolucio</th>
                <td>{{ $lloga->data_devolucio }}</td>
            </tr>
            <tr>
                <th>Lloc de Devolucio</th>
                <td>{{ $lloga->lloc_devolucio }}</td>
            </tr>
            <tr>
                <th>Preu per Dia</th>
                <td>{{ $lloga->preu_dia }} €</td>
            </tr>
            <tr>
                <th>Prestec amb Retorn de Diposit Ple</th>
                <td>{{ $lloga->prestec_retorn_diposit_ple == 1 ? 'Sí' : 'No' }}</td>
            </tr>
            <tr>
                <th>Tipus de Asseguranca</th>
                <td>{{ $lloga->tipus_asseguranca }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
