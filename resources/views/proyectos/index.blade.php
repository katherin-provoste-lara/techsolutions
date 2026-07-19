<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #eeeeee;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<!-- Esta vista muestra todos los proyectos registrados.
Aquí se visualizará la información que entregue el controlador. -->

<body>
    <x-uf />

<h1>Listado de Proyectos</h1>

<table>

    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha Inicio</th>
            <th>Estado</th>
            <th>Responsable</th>
            <th>Monto</th>
        </tr>
    </thead>

    <tbody>

        <!-- Aquí después llegarán los datos del controlador -->

    </tbody>

</table>

</body>
</html>
