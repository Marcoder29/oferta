<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h1>Editar Oferta: {{ $oferta->titulo }}</h1>
    
    <form action="{{ route('ofertas.update', $oferta->id) }}" method="POST">
        @csrf
        @method('PUT') <div class="mb-3">
            <label>Título:</label>
            <input type="text" name="titulo" class="form-control" value="{{ $oferta->titulo }}" required>
        </div>

        <div class="mb-3">
            <label>Vigencia:</label>
            <input type="date" name="vigencia" class="form-control" value="{{ $oferta->vigencia }}" required>
        </div>

        <div class="mb-3">
            <label>Tienda:</label>
            <input type="text" name="tienda" class="form-control" value="{{ $oferta->tienda }}" required>
        </div>

        <div class="mb-3">
            <label>Precio Original:</label>
            <input type="number" step="0.01" name="precio_original" class="form-control" value="{{ $oferta->precio_original }}" required>
        </div>

        <div class="mb-3">
            <label>Precio Descuento:</label>
            <input type="number" step="0.01" name="precio_descuento" class="form-control" value="{{ $oferta->precio_descuento }}" required>
        </div>

        <button type="submit" class="btn btn-warning">Actualizar Oferta</button>
        <a href="{{ route('ofertas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>