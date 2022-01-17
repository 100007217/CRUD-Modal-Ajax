

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <title>App CRUD Modal | Laravel + Ajax</title>
            <script src="js/ajax.js"></script>
            <meta name="csrf-token" id="token" content="{{ csrf_token() }}">
        </head>
        <body>
            <th>ID</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            @forelse ($objetos as $objeto)
            <br>
            <tr>
                <td scope="row">{{$objeto->id}}</td>
                <td>{{$objeto->Titulo}}</td>
                <td>{{$objeto->Descripcion}}</td>
                <td>
                    <form method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="_method" value="POST">
                        <button class= "btn btn-secondary" type="submit" value="Edit">Editar</button>
                    </form>
                </td>
                <td>
                    <form method="post">
                        <input type="hidden" name="_method" value="DELETE" id="deleteObjeto">
                        <button class= "btn btn-danger" type="submit" value="Delete" onclick="eliminar({{$objeto->id}}); return false;" >Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="7">No hay registros</td></tr>
            @endforelse
        </body>
        </html>