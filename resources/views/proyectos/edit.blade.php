<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar Proyecto</title>


    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }


        .contenedor {

            width: 500px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;

        }


        h1 {

            text-align: center;

        }


        label {

            display: block;
            margin-top: 15px;
            font-weight: bold;

        }


        input {

            width: 100%;
            padding: 8px;
            margin-top: 5px;

        }


        button {

            margin-top: 20px;
            padding: 10px 20px;
            cursor: pointer;

        }


    </style>


</head>

<!-- Esta vista permite modificar los datos de un proyecto existente.
Muestra la información actual para poder actualizarla. -->

<body>


<div class="contenedor">


<h1>Editar Proyecto</h1>



<form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">

    @csrf

    @method('PUT')


<label>
Nombre:
</label>

<input
type="text"
name="nombre"
value="{{ $proyecto->nombre }}">



<label>
Fecha Inicio:
</label>

<input
type="date"
name="fecha_inicio"
value="{{ $proyecto->fecha_inicio }}">



<label>
Estado:
</label>

<input
type="text"
name="estado"
value="{{ $proyecto->estado }}">



<label>
Responsable:
</label>

<input
type="text"
name="responsable"
value="{{ $proyecto->responsable }}">



<label>
Monto:
</label>

<input
type="number"
name="monto"
value="{{ $proyecto->monto }}">



<button type="submit">

Actualizar Proyecto

</button>



</form>



</div>


</body>


</html>
