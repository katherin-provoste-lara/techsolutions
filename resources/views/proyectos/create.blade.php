<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crear Proyecto</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        h1 {
            text-align: center;
        }

        form {
            width: 50%;
            margin: auto;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
        }

    </style>

</head>
<!--Esta vista contiene el formulario para ingresar un nuevo proyecto.
El usuario completa los datos y luego se envían para guardar el proyecto..-->

<body>


<h1>Crear Nuevo Proyecto</h1>


<form>


    <label>
        Nombre del proyecto:
    </label>

    <input
        type="text"
        name="nombre"
        placeholder="Ingrese nombre del proyecto"
    >



    <label>
        Fecha de inicio:
    </label>

    <input
        type="date"
        name="fecha_inicio"
    >



    <label>
        Estado:
    </label>

    <select name="estado">

        <option value="Pendiente">
            Pendiente
        </option>

        <option value="En progreso">
            En progreso
        </option>

        <option value="Finalizado">
            Finalizado
        </option>

    </select>



    <label>
        Responsable:
    </label>

    <input
        type="text"
        name="responsable"
        placeholder="Ingrese responsable"
    >



    <label>
        Monto:
    </label>

    <input
        type="number"
        name="monto"
        placeholder="Ingrese monto"
    >



    <button type="submit">
        Guardar Proyecto
    </button>


</form>


</body>

</html>
