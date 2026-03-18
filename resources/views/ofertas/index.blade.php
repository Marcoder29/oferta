<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Ofertas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Ofertas Disponibles</h1>
        <a href="{{ route('ofertas.create') }}" class="btn btn-primary">Nueva Oferta</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-hover shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Título</th>
                <th>Tienda</th>
                <th>Vigencia</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ofertas as $oferta)
            <tr>
                <td>{{ $oferta->titulo }}</td>
                <td>{{ $oferta->tienda }}</td>
                <td>{{ $oferta->vigencia }}</td>
                <td>
                    <del class="text-danger">${{ number_format($oferta->precio_original, 2) }}</del> 
                    <strong>${{ number_format($oferta->precio_descuento, 2) }}</strong>
                </td>
                <td>
                    <a href="{{ route('ofertas.edit', $oferta->id) }}" class="btn btn-sm btn-warning">Editar</a>

                    <form action="{{ route('ofertas.destroy', $oferta->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que quieres borrar esta oferta?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No hay ofertas registradas aún.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>