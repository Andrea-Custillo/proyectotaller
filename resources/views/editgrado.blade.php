@extends('plantilla')
@section('contenido')

    <div class = "row mt- 3">
        <div class ="col-md-6 offset-md-3">
            <div class="card">
                <div class ="card-header bg-dark text-white"> Editar Grado </div>

                <div class ="card-body">
                    <form  id= "frmGrados" method= "POST" action="{{url('grados',[$grado])}}">
                        @method('PUT')
                        @csrf

                        <div class = "input-group mb-3">
                            <span class ="input-group-text"><i class ="fa-solid fa-graduation-cap"></i></span>
                            <input type="text" name ="grado"  value= "{{$grado->grado}}" class ="form-control " maxlength="50" placeholder="grado" required >
                        </div>
                        <div class ="d-grid col-6 mx-auto">
                            <button class = "btn btn-success"><i class = "fa-solid fa-floppy-disk"></i> Guardar</button>
                        </div>
                    </form>    
                </div>    

            </div> 
        </div> 
    </div> 


@endsection