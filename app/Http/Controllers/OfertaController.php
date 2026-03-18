<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;

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
        // Validación básica
        $request->validate([
            'titulo' => 'required',
            'vigencia' => 'required|date',
            'tienda' => 'required',
            'precio_original' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
        ]);

        Oferta::create($request->all());
        return redirect()->route('ofertas.index');
    }

    
}
