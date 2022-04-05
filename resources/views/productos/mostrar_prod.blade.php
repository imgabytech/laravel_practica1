@extends('plantillas.plantilla')
@section('contenedor')
<body>
  
 <h3>Mostrar Producto</h3>  

<div class="container">
<a href="/productos" class="btn btn-primary botonderecha">Ir a Producto</a><br></br>	
	<div class="row">

	<div class="col-5">	
	<center>
	   
		<img src="{{ url('img/caja.jpg') }}">
        <!--<img src="{{ url('img/$producto->codigo_prod.jpg') }}">-->
		<table>

			<td>		
		 		<form action="/verEditar/{{($producto->id)}}" method ="POST" >
            	@csrf
            	@method('get')           
            	<button class="btn btn-primary" type="submit">Editar</button>
            	</form>         
    		</td>

			@if ($producto->stock_prod<=0)	

		    <td>        
            	<form action="/eliminar/{{($producto->id)}}" method ="POST" >
            	@csrf
            	@method('delete') 
            	<button class="btn btn-danger" type="submit" onclick="return EliminarRegistro('Eliminar Producto {{$producto->nombre_prod}}')">Eliminar</button>           
            	</form> 
    		</td>

			@else	

			<td>
			<button class="btn btn-danger disabled" type="submit">Eliminar</button>  
		    </td>   		

		@endif
			
    	</table>
    </center>
	</div>

	<div class="col-4">	
	<center>
   <p> {{ $producto->nombre_prod }}</p>
   <p> {{ $producto->codigo_prod }}</p>
   <p> Precio (&#8364;): {{ $producto->precio_prod }}</p>
   <p> Stock disponible: {{ $producto->stock_prod }}</p>
   			<table>
   				<td>
   				<form action="/entrada/{{($producto->id)}}" method ="POST" >
            	@csrf
            	@method('put')            	    
            	<button class="btn btn-primary" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Comprar Productos (entrada)">Compra</button>
            	</form>   
            	</td>
            	
            	@if ($producto->stock_prod<=0)	
            	<td>
				<button class="btn btn-primary disabled" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Vender Productos (salida)">Venta</button>  
		    	</td>

		    	@else
		    	<td>
            	<form action="/salida/{{($producto->id)}}" method ="POST" >
            	@csrf
            	@method('put')            	     
            	<button class="btn btn-primary" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Vender Productos (salida)">Venta</button>
            	</form>   
                </td>
                @endif
             </table>
   
	</center>	
	</div>         
                   

</div>

<div class="row">
	<table class='table table-bordered'>
		<tr>
		<th class='text-center' colspan=5 >HISTORIAL DEL PRODUCTO</th>
		</tr>
			<tr>
				<td>Fecha</td>
				<td>Hora</td>
				<td>Descripción</td>
				<td>Referencia</td>
				<td class='text-center'>Total</td>
			</tr>

	</table>			
</div>	

</div><!-- container -->
</body>

<script>
    function EliminarRegistro(value){
        action = confirm(value) ? true: event.preventDefault()
    }
</script>

 @endsection