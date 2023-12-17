<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grados;

class GradosController extends Controller
{
   
    public function index()
    {
        $grados = Grados::all();
        return view('grados',compact('grados'));
    }

    
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        $grado= new Grados($request->input());
        $grado->saveOrFail();
        return redirect('grados');
    }

   
    public function show($id)
    {
        $grado = Grados::find($id);
        return view('editgrado',compact('grado'));
        
    }

   
    public function edit($id)
    {
        
    }

  
    public function update(Request $request, $id)
    {
        $grado = Grados::find($id);
        $grado->fill($request->input())->saveOrFail();
        return redirect('grados');
    }

   
    public function destroy($id)
    {
        $grado = Grados::find($id);
        $grado->delete();
        return redirect('grados');
    }
}
