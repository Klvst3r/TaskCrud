<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Editar</title>
</head>

<div class="container mt-5">
    <div class="card col-xs-6 offset-1">
        <div class="card-header">
            Creando Tareas
        </div>
        <div class="card-body">

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf

                <input type="hidden" id="id" name="id" value="">


                <div class="mb-3">
                    <label for="descrip_task">Descripción de la tarea </label>
                    @error('descrip_task')
                        <small style="color: red">* {{ $message }}</small>
                    @enderror

                    <input type="text" class="form-control" name="descrip_task" id="descrip_task"
                        aria-describedby="descrip_task" value="{{ old('descrip_task') }}">
                </div>

                <div class="mb-3">
                    <label for="tipo_task">Tipo de tarea </label>
                    @error('tipo_task')
                        <small style="color: red">* {{ $message }}</small>
                    @enderror

                    <input type="text" class="form-control" name="tipo_task" id="tipo_task"
                        value="{{ old('tipo_task') }}">
                </div>

                <div class="mb-3">
                    <label for="personal_task">Atención a usuario </label>
                    @error('personal_task')
                        <small style="color: red">* {{ $message }}</small>
                    @enderror

                    <input type="text" class="form-control" name="personal_task" id="personal_task"
                        value="{{ old('personal_task') }}">
                </div>
                <div class="d-grid mt-3">
                    <div class="offset-4">
                        <button type="submit" class="btn btn-primary mt-2">Registrar tarea</button>
                        <a href="{{ route('tasks.index') }}" class="btn btn-warning mt-2">Cancelar</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<body>


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
