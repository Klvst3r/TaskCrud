<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas</title>
</head>

<body>
    <table class="table table-striped text-center" border="1">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Descripción</th>
                <th scope="col">Tipo de Tarea</th>
                <th scope="col">Atención a usuario</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($task as $item)
                <tr>
                    {{-- Muestra el index --}}
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $item->descrip_task }}</td>
                    <td>{{ $item->tipo_task }}</td>
                    <td>{{ $item->personal_task }}</td>
                    <th>
                        <div class="container">
                            <div class="row justify-content-md-center">
                                {{-- <a href="{{ route('tasks.edit', $item) }}" class="btn btn-success col-3">Editar</a>
                                <form action="{{ route('tasks.destroy', $item) }}" method="POST" class="col-3...">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger w-100">Borrar</button>
                                </form> --}}
                            </div>
                        </div>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
