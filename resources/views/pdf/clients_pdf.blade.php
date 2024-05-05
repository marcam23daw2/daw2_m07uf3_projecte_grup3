<!DOCTYPE html>
<html>
<head>
    <title>Dades del client</title>
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
    <h1>Dades del client</h1>
    <table>
        <tbody>
            <tr>
                <th>DNI</th>
                <td>{{ $client->dni_client }}</td>
            </tr>
            <tr>
                <th>Nom i cognoms</th>
                <td>{{ $client->nom_cognoms }}</td>
            </tr>
            <tr>
                <th>Edat</th>
                <td>{{ $client->edat }}</td>
            </tr>
            <tr>
                <th>Telèfon</th>
                <td>{{ $client->telefon }}</td>
            </tr>
            <tr>
                <th>Adreça</th>
                <td>{{ $client->adreça }}</td>
            </tr>
            <tr>
                <th>Ciutat</th>
                <td>{{ $client->ciutat }}</td>
            </tr>
            <tr>
                <th>País</th>
                <td>{{ $client->pais }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $client->email }}</td>
            </tr>
            <tr>
                <th>Número de permís de conduir</th>
                <td>{{ $client->numero_permis_conduccio }}</td>
            </tr>
            <tr>
                <th>Punts</th>
                <td>{{ $client->punts }}</td>
            </tr>
            <tr>
                <th>Tipus de targeta</th>
                <td>{{ $client->tipus_targeta }}</td>
            </tr>
            <tr>
                <th>Número de targeta</th>
                <td>{{ $client->numero_targeta }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
