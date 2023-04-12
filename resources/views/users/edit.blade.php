<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <style>
        .input-div {margin-top: 5px}
    </style>
</head>

<body>
    <h3>Editar Usuario</h3>
    <a href="{{ route('list_users') }}">Volver a lista de usuarios</a>
    <div>
        <form action="/users/edit/{{ $user->id }}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <div class="input-div">
                <label for="name">Nombre</label>
                <input type="text" name="name" value={{ $user->name }}>
            </div>
            <div class="input-div">
                <label for="name">Correo Electronico</label>
                <input type="text" name="email" value={{ $user->email }}>
            </div>
            <div class="input-div">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>

</html>