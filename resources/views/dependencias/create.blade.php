<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso API</title>
</head>
<body>
    <h1>Captura de una nueva dependencia </h1>
<form action="{{route('dependencias.store')}}" method="POST">
    @csrf
        <label> Nombre </label>
        <div class="form-group">
        <input type="text" name="nombre" placeholder="Ingrese un Nombre po favo">
        </div>
        <div class="form-group">
        <input type="email" name="email" placeholder="Ingresa un Correo">
        </div>
        <div class="form-group">
        <input type="password" name="password" placeholder="Ingresa una Contraseña">
        </div>
        <div class="form-group">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
