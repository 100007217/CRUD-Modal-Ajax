<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <table class="table" id="table">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Descripción</th>
            <th scope="col" colspan="2">Acciones</th>
        </tr>
        @forelse ($objetos as $result)
        <tr>
            <td scope="row">{{$result->id}}</td>
            <td>{{$result->Titulo}}</td>
            <td>{{$result->Descripcion}}</td>
            <td>
                {{-- Route::get('/clientes/{cliente}/edit',[ClienteController::class,'edit'])->name('clientes.edit'); --}}
                <form action="{{route('clientes.edit',['cliente'=>$cliente->id])}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="GET">
                    <button class= "btn btn-secondary" type="submit" value="Edit">Editar</button>
                </form>
            </td>
            <td>
                {{-- Route::delete('/clientes/{cliente}',[ClienteController::class,'destroy'])->name('clientes.destroy'); --}}
                <form method="post">
                    <input type="hidden" name="_method" value="DELETE" id="deleteCliente">
                    <button class= "btn btn-danger" type="submit" value="Delete" onclick="eliminar({{$cliente->id}}); return false">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="7">No hay registros</td></tr>
        @endforelse
    </table>
</body>
</html>