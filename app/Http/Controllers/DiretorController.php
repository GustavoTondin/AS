<?php

namespace App\Http\Controllers;

use App\Models\Diretor;
use Illuminate\Http\Request;

class DiretorController extends Controller
{
        public function index()
    {
        $diretores = Diretor::all();
        return view('diretores.index', compact('diretores'));
    }

    public function create()
    {
        return view('diretores.create');
    }

    public function store(Request $request)
    {
        Diretor::create($request->all());
        return redirect('diretores')->with('success', 'diretor created successfully.');
    }

    public function edit($id)
    {
        $diretor = Diretor::findOrFail($id);
        return view('diretores.edit', compact('diretor'));
    }

    public function update(Request $request, $id)
    {
        $diretor = Diretor::findOrFail($id);
        $diretor->update($request->all());
        return redirect('diretores')->with('success', 'diretor updated successfully.');
    }

    public function destroy($id)
    {
        $diretor = Diretor::findOrFail($id);
        $diretor->delete();
        return redirect('diretores')->with('success', 'diretor deleted successfully.');
    }
}
