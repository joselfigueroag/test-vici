<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>

<body>
    <h3>Lista de usuarios</h3>
    <div>
        <div>
            <table border="1", style="border-spacing: 5px">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>
                </thead>
                @foreach ($users as $user)
                    <tr>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th>
                            <a href="/users/edit/{{$user->id}}">Editar</a>
                        <th>
                        <th>
                            <a href="/users/delete/{{$user->id}}">Eliminar</a>
                        <th>
                    </tr>
                @endforeach
            </table>
        </div>
        <div style="margin-top: 20px">
            <button><a href="{{ route('create_user') }}" style="box-shadow">Crear usuario</a></button>
        </div>
    </div>
</body>

</html>
