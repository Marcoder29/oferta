<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;

class OfertaController extends Controller
{
    public function index() {
        $ofertas = Oferta::all();
        return view('ofertas.index', compact('ofertas'));
    }

    public function create() {
        return view('ofertas.create');
    }

    public function store(Request $request) {
        try {
            Oferta::create($request->all());
            return redirect('/ofertas');
        } catch (\Exception $e) {
            return "Error en la base de datos: " . $e->getMessage();
        }
    }
    public function edit(Oferta $oferta) {
    return view('ofertas.edit', compact('oferta'));
}

public function update(Request $request, Oferta $oferta) {
    $oferta->update($request->all());
    return redirect('/ofertas');
}

public function destroy(Oferta $oferta) {
    $oferta->delete();
    return redirect('/ofertas');
}
}