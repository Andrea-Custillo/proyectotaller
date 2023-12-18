@extends('plantilla')
@section('contenido')

    <div class = "row mt- 3">
        <div class ="col-md-6 offset-md-3">
            <div class="card">
                <div class ="card-header bg-dark text-white"> Editar Alumno </div>
                <div class ="card-body">
                    <form  id= "frmGrados" method= "POST" action="{{url('alumnos',[$alumno])}}">
                        @csrf
                        @method('PUT')
                        <div class = "input-group mb-3">
                            <span class ="input-group-text"><i class ="fa-solid fa-user"></i></span>
                            <input type="text" name ="nombre"  value= "{{$alumno->nombre}}" class ="form-control " maxlength="50" placeholder="nombre" required >
                        </div>

                        <div class = "input-group mb-3">
                            <span class ="input-group-text"><i class ="fa-solid fa-user"></i></span>
                            <input type="text" name ="apellido"  value= "{{$alumno->apellido}}" class ="form-control " maxlength="50" placeholder="apellido" required >
                        </div>

                        <div class = "input-group mb-3">
                            <span class ="input-group-text"><i class ="fa-solid fa-user"></i></span>
                            <input type="text" name ="edad"  value= "{{$alumno->edad}}" class ="form-control " maxlength="50" placeholder="edad" required >
                        </div>

                        <div class = "input-group mb-3">
                            <span class ="input-group-text"><i class ="fa-graduation-cap"></i></span>
                            <select name= "id_grado" class ="form-select" required>
                                <option value="">Grado</option>
                                @foreach($grados as $row)
                                @if($row->id== $alumno->id_grado)
                                <option selected value= "{{$row->id}}">{{$row->grado}}</option>

                                    @else
                                <option value= "{{$row->id}}">{{$row->grado}}</option>

                                @endif
                                @endforeach
                            </select>    
                        </div>

                        <div class ="d-grid col-5 mx-auto">
                            <button class = "btn btn-success"><i class = "fa-solid fa-floppy-disk"></i> Guardar</button>
                        </div>
                    </form>    
                </div>    

            </div> 
        </div> 
    </div> 


@endsection