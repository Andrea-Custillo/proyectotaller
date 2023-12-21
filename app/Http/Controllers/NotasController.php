<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;
use App\Models\Materias;

class NotasController extends Controller
{
    
    public function index()
    {
        
        $notas = Notas::select('notas.id','notauno','notados','notatres','id_materia','materia')
        ->join('materias','materias.id','=','notas.id_materia')->get();
        $materias = Materias::all();
        return view('notas',compact('notas','materias'));
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $nota = new Notas($request->input());
        $nota->saveOrFail();
        return redirect('notas');
    }

   
    public function show($id)
    {
        $nota = Notas::find($id);
      
        $materias = Materias::all();
        return view('editNota',compact('nota','materias'));
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        $nota = Notas::find($id);
        $nota->fill($request->input())->saveOrFail();
        return redirect('notas');
    }

    
    public function destroy($id)
    {
        //
        $nota = Notas::find($id);
        $nota->delete();
        return redirect('notas');
    }
}
