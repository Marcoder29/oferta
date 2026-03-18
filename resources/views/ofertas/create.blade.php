<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h1>Crear Nueva Oferta</h1>
    <form action="{{ route('ofertas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Título:</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Vigencia:</label>
            <input type="date" name="vigencia" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tienda:</label>
            <input type="text" name="tienda" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Precio Original:</label>
            <input type="number" step="0.01" name="precio_original" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Precio Descuento:</label>
            <input type="number" step="0.01" name="precio_descuento" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Oferta</button>
        <a href="{{ route('ofertas.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>