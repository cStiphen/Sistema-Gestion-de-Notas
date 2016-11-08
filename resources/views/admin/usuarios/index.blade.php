
@extends('layouts.app')
@section('title','Estudiantes')


@section('content')
<h3 class="center">Estudiantes</h3>
<!--campo buscar y registrar-->
  @include('admin.usuarios.modals.crearEstudiante')
     

<!-- finaliza campo buscar y registrar -->

<div class="row">
  <div class="input-field col s3 ">
    <nav class="blue">
     <div class="nav-wrapper">     
        <div class="input-field">
          <input name="search" onkeyup="buscar()"  id="search" type="search">
          <label for="search"><i class="material-icons">search</i></label>       
        </div>
     </div>
    </nav>  

  </div>
</div>
<hr>

<div class="row" id="Estudiantes">
 	
  
<table>
    <thead>
      <tr>
       <th data-field="id">Nombre Completo</th>
       <th data-field="name">Código</th>
       <th data-field="email">Correo</th>
       <th data-field="accion">Acciones</th>
      </tr>
    </thead>

    <tbody>
      @foreach($estudiantes as $estudiante)
        <tr>
          <td> {{ $estudiante->primerNombre}} {{$estudiante->segundoNombre}} {{$estudiante->primerApellido}}</td>
          <td> {{ $estudiante->codigo }}</td>
          <td> {{ $estudiante->email }}</td>
          <td>
           <a onClick="abrirModalEditar({{$estudiante->id}})"  data-target='#editarEstudiante' class="waves-effect waves-light btn-floating btn-small modal-trigger"><i class="material-icons">edit</i></a> 
           <a onClick="abrirModalEliminar({{$estudiante->id}})" id="{{$estudiante->id}}" data-target='#eliminarEstudiante' class="waves-effect waves-light btn-floating btn-small modal-trigger"><i class="material-icons red">delete</i></a>
          </td> 
        </tr>
      @endforeach

    </tbody>
 
  </table>


</div>

 {!! $estudiantes->render()!!}

@include('admin.usuarios.modals.eliminarEstudiante')
@include('admin.usuarios.modals.editarEstudiante')
@overwrite

@section('scripts')

<script type="text/javascript">
 
function buscar(){
 
 var ruta = "{{ route('admin.estudiantes.index')}}";
 var valor = $('#search').val();
 
  $.ajax({
      url:ruta,
      type: 'GET',
      dataType:'json',
      data:{valor:valor},
      success:function(data){
        $("#Estudiantes").html(data);
        
      }
     });
 

  }     

function abrirModalEliminar(id){
    var ruta="{{route('admin.estudiantes.destroy',['%iduser%'])}}" ;
    ruta = ruta.replace('%iduser%',id); 
    var ide= id;
    
    $.get(ruta,function(res){
      var nombre = res.primerNombre+" "+res.segundoNombre+" "+res.primerApellido;
      $("#nombre").val(res.id);
      $('p').text(nombre);
      $('#eliminarEstudiante').openModal();
      }); 

    }
    
  $('#eliminar').click(function(){

     var valor= $("#nombre").val();
      var ruta2="{{route('admin.estudiantes.destroyupdate',['%iduser%'])}}" ;
      ruta2 = ruta2.replace('%iduser%',valor);
      var token = $('#token').val();

      $.ajax({
      url:ruta2,
      headers:{'X-CSRF-TOKEN': token},
      type: 'PUT',
      dataType:'json',
      data:{valor},
      success:function(){
        
        window.location= "{{route('admin.estudiantes.index')}}";

        
      }
     });

  }) 
  
    
  function openModalCrear() {
    $('#crearEstudiante').openModal();
  }

  function abrirModalEditar(id){
   
    var ruta="{{route('admin.estudiantes.edit',['%iduser%'])}}" ;
    ruta = ruta.replace('%iduser%',id);
   
   $.get(ruta,function(res){
    $('#id').val(res.id);
    nombre = res.primerNombre+" "+res.segundoNombre+" "+res.primerApellido+" "+res.segundoApellido;
    $('p').text(nombre);
    $("#firstname").val(res.primerNombre);
    $("#segundoNombre").val(res.segundoNombre);
    $("#primerApellido").val(res.primerApellido);
    $("#segundoApellido").val(res.segundoApellido);
     $("#email").val(res.email);
    $("#codigo2").val(res.codigo);
    $('#editarEstudiante').openModal();
   });
    
  }

</script> 


@endsection




 