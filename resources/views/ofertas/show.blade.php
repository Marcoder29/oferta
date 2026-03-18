<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Oferta #{{ $oferta->id }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h2 class="mb-0">Detalle de la Oferta #{{ $oferta->id }}</h2>
        </div>
        <div class="card-body">
            <h4 class="text-primary">{{ $oferta->titulo }}</h4>
            <hr>
            <p><strong>Tienda:</strong> {{ $oferta->tienda }}</p>
            <p><strong>Vigencia:</strong> {{ $oferta->vigencia }}</p>
            <p><strong>Precio Original:</strong> <del class="text-danger">${{ number_format($oferta->precio_original, 2) }}</del></p>
            <p><strong>Precio con Descuento:</strong> <span class="badge bg-success fs-5">${{ number_format($oferta->precio_descuento, 2) }}</span></p>
            <p><strong>Fecha de registro:</strong> {{ $oferta->created_at->format('d/m/Y H:i') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('ofertas.index') }}" class="btn btn-secondary">Volver al listado</a>
            <a href="{{ route('ofertas.edit', $oferta->id) }}" class="btn btn-warning">Editar esta oferta</a>
        </div>
    </div>
</body>
</html>