@extends('plantilla')
@section('contenido')
    <div class= "row mt-3">
        <div class="col-md-4 offset-md-4">
            <div class ="d-grid mx-auto">
                <button class ="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalseccion">
                    <i class ="fa-solid fa-circle-plus"></i> Añadir
                </button>  
            </div>    
         </div>
    </div>
    <div class= "row mt-3">
        <div class="col-12 col-lg-8 offset-0  offset-lg-2">
            <div class = " table-responsive">
                <table  class ="table table-bordered table-hover">
                    <thead><tr><th>#</th><th>NOMBRE</th><th>APELLIDO</th><th>EDAD</th><th>GRADO</th><th>EDITAR</th><th>ELIMINAR</th></tr></thead>
                    <tbody class ="table-group-divider">
                        @php $i=1; @endphp
                        @foreach($alumnos as $row)

                        <tr><td>{{ $i++ }}</td>
                        <td>{{ $row->nombre }}</td>
                        <td>{{ $row->apellido }}</td>
                        <td>{{ $row->edad }}</td>
                        <td>{{ $row->grado }}</td>
                        <td>
                            <a href="{{ url('alumnos', [$row]) }}" class ="btn btn-warning"><i class="fa-solid fa-edit" ></i></a>

                        </td>       
                        <td>
                            <form method = "POST" action  ="{{url ('alumnos',[$row]) }}">
                                @method("delete")
                                @csrf
                                <button class =""btn btn-danger> <i class="fa-solid fa-trash" ></i> </button>
                             </form>
                        </td>
                        @endforeach
                    </tbody>    

                </table>
            </div>
        </div>
    </div>
    <div class = "modal fade" id= "modalseccion" tabindex= "-1" aria-hidden= "true">
        <div class = "modal-dialog">
            <div class ="modal-content">
                    <div class="modal-header">
                        <label class ="h5" id="titulo_modal">Añadir Alumno</label>
                        <button type="button" class ="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>    
                    <div class ="modal-body">
                        <form  id= "frmgrados" method="POST" action="{{url('alumnos')}}">
                         @csrf

                        <div class = "imput-group mb-3">
                            <span class ="input-group-text"><i class ="fa-solid fa-user"></i></span>
                            <input type="text" name ="nombre" class ="form-control " maxlength="50" placeholder="Nombre" required >
                        </div>

                        <div class = "imput-group mb-3">
                            <span class ="input-group-text"><i class ="fa-solid fa-user"></i></span>
                            <input type="text" name ="apellido" class ="form-control " maxlength="50" placeholder="apellido" required >
                        </div>

                        <div class = "imput-group mb-3">
                            <span class ="input-group-text"><i class ="fa-solid fa-user"></i></span>
                            <input type="text" name ="edad" class ="form-control " maxlength="50" placeholder="edad" required >
                        </div>

                        <div class = "imput-group mb-3">
                            <span class ="input-group-text"><i class ="fa-solid fa-graduation-cap"></i></span>
                            <select name= "id_grado" class ="form-select" required>
                                <option value="">Grado</option>
                                @foreach($grados as $row)
                                <option value= "{{$row->id}}">{{$row->grado}}</option>
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
                <div class ="modal-footer">
                    <button type="button" id ="btnCerrar" class = "btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>    

     </div> 
    </div>   
</div>
@endsection
