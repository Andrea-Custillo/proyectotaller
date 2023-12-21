<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materias;

class MateriasController extends Controller
{
   
    public function index()
    {
        $materias = Materias::all();
        return view('materias',compact('materias'));
    }

    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        $materia= new Materias($request->input());
        $materia->saveOrFail();
        return redirect('materias');
    }

   
    public function show($id)
    {
        $materia = Materias::find($id);
        return view('editmateria',compact('materia'));
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        $materia = Materias::find($id);
        $materia->fill($request->input())->saveOrFail();
        return redirect('materias');
    }

    
    public function destroy($id)
    {
        $materia = Materias::find($id);
        $materia->delete();
        return redirect('materias');
    }
}
