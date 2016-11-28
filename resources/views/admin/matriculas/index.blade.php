@extends('layouts.app')
@section('title','Mis Asignaturas')

@section('content')

<h4 class="center">Mis Asignaturas</h4>
<br>

		<div class="row">
			<div class="col s18 m3 l3">	
				<div class="input-field">               
				    <select name="periodos" id="periodos">               
				        @foreach($periodos as $periodo);
	                        <option value="{{$periodo->Id}}" id="{{$periodo->Id}}">{{$periodo->Ano."-".$periodo->Periodo}}</option>
				        @endforeach
				    </select>
				    <label>Periodo Académico</label>
                </div>
			</div>		
		</div>
<div class="divider grey darken-1"></div>
<br>

		<div class="row">
            <div class="col s12 m12 l12">
		        <table class="responsive-table striped bordered" id="asignaturas">
                     
                </table>
            </div>
		</div>
		@include('admin.asignaturas.modales.matricular')
@endsection


@section('scripts')

<script type="text/javascript">

	$(document).ready(function(){
	$('#periodos').material_select(); 

	var ruta=  "{{ route('matriculas.index') }}";
	var periodo= $('#periodos').val();

	$('#periodos').change(function(){

		var periodo= $('#periodos').val();

			$.ajax({
            		type: "GET",
            		url: ruta,
            		data: {periodo:periodo},
            		
            		success: function(data) {
                        $('#asignaturas').html(data);
                        $('.tooltipped').tooltip({delay: 50});

                        console.log(periodo);

            		} 
            		
        		});
	});

	

			$.ajax({
            		type: "GET",
            		url: ruta,
            		data: {periodo:periodo},
            		
            		success: function(data) {
                        $('#asignaturas').html(data);
                        $('.tooltipped').tooltip({delay: 50});

                        console.log(periodo);

            		} 
            		
        		});

	});




	
	 function matricular(id){
            

                $('#horario_archivo').val(id);
                $('#horario_estudiante').val(id);
            
                 $('#codigo').autocomplete({
                  source: "{{url('matricular/autocomplete')}}",
                  minLength: 2,
                  select: function(event, ui) {
                    $('#codigo').val(ui.item.value);
                  }
                });
                

                $('#matricular').openModal();
            
     }

</script>
@endsection



			     