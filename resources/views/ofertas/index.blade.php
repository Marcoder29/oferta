<table class="table table-striped table-hover shadow-sm">
    <thead class="table-dark">
        <tr>
            <th>Título</th>
            <th>Tienda</th>
            <th>Vigencia</th>
            <th>Precio</th>
            <th>Acciones</th> </tr>
    </thead>
    <tbody>
        @forelse($ofertas as $oferta)
        <tr>
            <td>{{ $oferta->titulo }}</td>
            <td>{{ $oferta->tienda }}</td>
            <td>{{ $oferta->vigencia }}</td>
            <td>
                <del class="text-danger">${{ $oferta->precio_original }}</del> 
                <strong>${{ $oferta->precio_descuento }}</strong>
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
            <td colspan="5" class="text-center">No hay ofertas registradas aún.</td> </tr>
        @endforelse
    </tbody>
</table>