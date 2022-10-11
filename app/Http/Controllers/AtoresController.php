<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ator;
use App\Http\Requests\AtorRequest;

class AtoresController extends Controller

/* public function index() {
        return "Olá!".
        "<br>Este é o index do controlador.";
        */
{
    public function index()
    {
        $atores = Ator::all();
        return view('atores.index', ['atores' => $atores]);
    }

    public function create()
    {
        return view('atores.create');
    }

    public function store(AtorRequest $request)
    {
        $novo_ator = $request->all();
        Ator::create($novo_ator);

        return redirect()->route('atores');
    }

    public function destroy($id)
    {
        Ator::find($id)->delete();
        return redirect()->route('atores');
    }

    public function edit($id)
    {
        $ator = Ator::find($id);
        return view('atores.edit', compact('ator'));
    }

    public function update(AtorRequest $request, $id)
    {
        Ator::find($id)->update($request->all());
        return redirect()->route('atores');
    }
}
