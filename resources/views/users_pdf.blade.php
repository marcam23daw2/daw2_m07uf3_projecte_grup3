<!DOCTYPE html>
<html>
<head>
    <title>Dades de l'usuari</title>
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
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Dades de l'usuari</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Rol</th>
                <th>Email</th>
                <th>Darrera hora d'entrada</th>
                <th>Darrera hora de sortida</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->darrera_hora_dentrada }}</td>
                <td>{{ $user->darrera_hora_desortida }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
