<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;
use App\Models\Grados;

class AlumnosController extends Controller
{
   
    public function index()
    {
        $alumnos = Alumnos::select('alumnos.id','nombre','apellido','edad','id_grado','grado')
        ->join('grados','grados.id','=','alumnos.id_grado')->get();
        $grados = Grados::all();
        return view('alumnos',compact('alumnos','grados'));
    }

    
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        $alumno = new Alumnos($request->input());
        $alumno->saveOrFail();
        return redirect('alumnos');
    }

   
    public function show($id)
    {
        $alumno = Alumnos::find($id);
        $grados = Grados::all();
        return view('editAlumno',compact('alumno','grados'));
    }

   
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
        $alumno = Alumnos::find($id);
        $alumno->fill($request->input())->saveOrFail();
        return redirect('alumnos');
    }

    
    public function destroy($id)
    {
        $alumno = Alumnos::find($id);
        $alumno->delete();
        return redirect('alumnos');
    }
}
