<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><center>Vista crear</center></h1>

    <br>

    <form action="{{route('productos.formdata')}}" method="POST">
        @csrf
        <label for="name">
            Nombre:
            <input type="text" name="nombre" id="nombre">
        </label>
        <br>
        <label for="precio">
            Precio:
            <input type="text" name="precio" id="precio">
        </label>
        <br>
        <label for="existencias">
            Existencias:
            <input type="text" name="existencias" id="existencias">
        </label>
        <br>
        <button type="submit">Enviar</button>

    </form>
    
</body>
</html>