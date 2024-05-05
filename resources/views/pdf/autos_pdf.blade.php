<!DOCTYPE html>
<html>
<head>
    <title>Dades del Automovil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            position: relative;
        }
        .logo {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 50px; 
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
    <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="logo">
    <h1>Dades del auto</h1>
    <table>
        <tbody>
            <tr>
                <th>Matricula</th>
                <td>{{ $auto->matricula_auto }}</td>
            </tr>
            <tr>
                <th>Numero de Bastidor</th>
                <td>{{ $auto->numero_bastidor }}</td>
            </tr>
            <tr>
                <th>Marca</th>
                <td>{{ $auto->marca }}</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>{{ $auto->model }}</td>
            </tr>
            <tr>
                <th>Color</th>
                <td>{{ $auto->color }}</td>
            </tr>
            <tr>
                <th>Nombre de Places</th>
                <td>{{ $auto->nombre_places }}</td>
            </tr>
            <tr>
                <th>Nombre de Portes</th>
                <td>{{ $auto->nombre_portes }}</td>
            </tr>
            <tr>
                <th>Grandaria del Maleter (Litres)</th>
                <td>{{ $auto->grandaria_maleter }} L</td>
            </tr>
            <tr>
                <th>Tipus de Combustible</th>
                <td>{{ $auto->tipus_combustible }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
