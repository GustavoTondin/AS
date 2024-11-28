<?php

namespace App\Http\Controllers;

use App\Models\Diretor;
use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
        public function index()
    {
        $filmes = Filme::all();
        return view('filmes.index', compact('filmes'));
    }

    public function create()
    {
        $diretores = Diretor::all();
        return view('filmes.create', compact('diretores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'genero' => 'required',
            'ano' => 'required'  
        ]);
        $filme = new Filme();
        $filme->titulo = $request->titulo;
        $filme->genero = $request->genero;
        $filme->ano = $request->ano;
        $filme->diretor_id = $request->diretor_id;
        $filme->save();
        return redirect('filmes')->with('success', 'filme updated successfully.');
    }

    public function edit($id)
    {
        $filme = Filme::findOrFail($id);
        return view('filmes.edit', compact('filme'));
    }

    public function update(Request $request, $id)
    {
        $filme = Filme::findOrFail($id);
        $filme->update($request->all());
        return redirect('filmes')->with('success', 'filme updated successfully.');
    }

    public function destroy($id)
    {
        $filme = Filme::findOrFail($id);
        $filme->delete();
        return redirect('filmes')->with('success', 'filme deleted successfully.');
    }
}
