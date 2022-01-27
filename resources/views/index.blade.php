<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="../../public/js/ajax.js"></script>
    <title>Index</title>
</head>
<body>
    <table class="table" id="table" border="1">
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
                {{-- Route::get('/clientes/{cliente}/edit',[ClienteController::class,'edit'])->name('clientes.edit');--}}
                <form action="{{url("/edit/{$result->id}")}}" method="POST">
                    <!--Es importante poner la encriptación, ya que en caso contrario la página devolverá un error 419-->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="GET">
                    <button class= "btn btn-secondary" type="submit" value="Edit">Editar</button>
                </form>
            </td>
            <td>
                {{-- Route::delete('/clientes/{cliente}',[ClienteController::class,'destroy'])->name('clientes.destroy'); --}}
                <form method="get">
                    {{-- <input type="hidden" name="_method" value="" id="deleteObjeto"> --}}
                    <input type="submit" class= "btn btn-danger" onclick="return eliminar(); return false;  ">
                    {{-- <button class= "btn btn-danger" type="submit" value="" onclick="return eliminar();">Eliminar</button> --}}
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="7">No hay registros</td></tr>
        @endforelse
    </table>
</body>
</html>