<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tareas</title>
</head>

<body>

    <div class="container mt-3">
        <div class="card col-12">
            <table class="table table-striped text-center">
                <div class="d-grid mt-2">
                    <div class="offset-5">

                        <a href="{{ route('tasks.create') }}" class="btn btn-success">Agregar Tarea</a>
                    </div>
                </div>
                <div class="d-grid mt-4">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Tipo de Tarea</th>
                            <th scope="col">Atención a usuario</th>
                            <th scope="col">Acción</th>
                        </tr>

                    </thead>
                </div>
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
                                        {{-- <a href="{{ route('tasks.edit', $item) }}" class="btn btn-success col-3">Editar</a> --}}
                                        <form action="{{ route('tasks.destroy', $item) }}" method="POST"
                                            class="col-10">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger w-100">Borrar</button>
                                        </form>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


</body>

</html>
