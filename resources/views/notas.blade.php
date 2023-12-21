@extends('plantilla')
@section('contenido')
    <div class= "row mt-3">
        <div class="col-md-4 offset-md-4">
            <div class ="d-grid mx-auto">
                <button class ="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalseccion">
                    <i class ="fa-solid fa-circle-plus"></i> Añadir
                </button>  
            </div>  
            <br>
            <div class ="d-grid mx-auto">
                <button class ="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalseccion">
                    <i class ="fa-solid fa-circle-plus"></i> Exportar
                </button>  
            </div>   
         </div>
    </div>
    <div class= "row mt-3">
        <div class="col-12 col-lg-8 offset-0  offset-lg-2">
            <div class = " table-responsive">
                <table  class ="table table-bordered table-hover">
                    <thead><tr><th>#</th><th>ETAPA 1</th><th>ETAPA2</th><th>ETAPA 3</th><th>ALUMNO</th><th>MATERIA</th></tr></thead>
                    <tbody class ="table-group-divider">
                        @php $i=1; @endphp
                        @foreach($materias as $row)

                        <tr><td>{{ $i++ }}</td>
                        <td>{{ $row->notauno }}</td>
                        <td>{{ $row->notados }}</td>
                        <td>{{ $row->notatres }}</td>
                        <td>{{ $row->alumno }}</td>
                       
                        <td>{{ $row->materia }}</td>
                        
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
                        <label class ="h5" id="titulo_modal">Agregar Calificaciones</label>
                        <button type="button" class ="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>    
                    <div class ="modal-body">
                        <form  id="frmalumnos" , id= "frmgrados", id= "frmmaterias" method="POST" action="{{url('notas')}}">
                         @csrf

                        <div class = "imput-group mb-3">
                            <span class ="input-group-text"><i class ="fa-solid fa-user"></i></span>
                            <input type="text" name ="notauno" class ="form-control " maxlength="50" placeholder="Etapa 1" required >
                        </div>

                        <div class = "imput-group mb-3">
                            <span class ="input-group-text"><i class ="fa-solid fa-user"></i></span>
                            <input type="text" name ="notados" class ="form-control " maxlength="50" placeholder="Etapa 2" required >
                        </div>

                        <div class = "imput-group mb-3">
                            <span class ="input-group-text"><i class ="fa-solid fa-user"></i></span>
                            <input type="text" name ="notatres" class ="form-control " maxlength="50" placeholder="Etapa 3" required >
                        </div>

                        <div class = "imput-group mb-3">
                            <span class ="input-group-text"><i class ="fa-solid fa-user"></i></span>
                            <input type="text" name ="alumno" class ="form-control " maxlength="50" placeholder="Estudiante" required >
                        </div>

                        <div class = "imput-group mb-3">
                            <span class ="input-group-text"><i class ="fa-solid fa-graduation-cap"></i></span>
                            <select name= "id_materia" class ="form-select" required>
                                <option value="">Materia</option>
                                @foreach($materias as $row)
                                <option value= "{{$row->id}}">{{$row->materia}}</option>
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
