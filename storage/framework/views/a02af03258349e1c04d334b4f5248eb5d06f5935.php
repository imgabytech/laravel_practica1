
<?php $__env->startSection('contenedor'); ?>
<body>
  
 <h3>Mostrar Producto</h3>  

<div class="container">
<a href="/productos" class="btn btn-primary botonderecha">Ir a Producto</a><br></br>	
	<div class="row">

	<div class="col-5">	
	<center>
	
		<img src="<?php echo e(url('img/caja.jpg')); ?>">
		<table>

			<td>		
		 		<form action="/verEditar/<?php echo e(($producto->id)); ?>" method ="POST" >
            	<?php echo csrf_field(); ?>
            	<?php echo method_field('get'); ?>           
            	<button class="btn btn-primary" type="submit">Editar</button>
            	</form>         
    		</td>

			<?php if($producto->stock_prod<=0): ?>	

		    <td>        
            	<form action="/eliminar/<?php echo e(($producto->id)); ?>" method ="POST" >
            	<?php echo csrf_field(); ?>
            	<?php echo method_field('delete'); ?> 
            	<button class="btn btn-danger" type="submit" onclick="return EliminarRegistro('Eliminar Producto <?php echo e($producto->nombre_prod); ?>')">Eliminar</button>           
            	</form> 
    		</td>

			<?php else: ?>	

			<td>
			<button class="btn btn-danger disabled" type="submit">Eliminar</button>  
		    </td>   		

		<?php endif; ?>
			
    	</table>
    </center>
	</div>

	<div class="col-4">	
	<center>
   <p> <?php echo e($producto->nombre_prod); ?></p>
   <p> <?php echo e($producto->codigo_prod); ?></p>
   <p> Precio (&#8364;): <?php echo e($producto->precio_prod); ?></p>
   <p> Stock disponible: <?php echo e($producto->stock_prod); ?></p>
   			<table>
   				<td>
   				<form action="/entrada/<?php echo e(($producto->id)); ?>" method ="POST" >
            	<?php echo csrf_field(); ?>
            	<?php echo method_field('put'); ?>            	    
            	<button class="btn btn-primary" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Comprar Productos (entrada)">Compra</button>
            	</form>   
            	</td>
            	
            	<?php if($producto->stock_prod<=0): ?>	
            	<td>
				<button class="btn btn-primary disabled" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Vender Productos (salida)">Venta</button>  
		    	</td>

		    	<?php else: ?>
		    	<td>
            	<form action="/salida/<?php echo e(($producto->id)); ?>" method ="POST" >
            	<?php echo csrf_field(); ?>
            	<?php echo method_field('put'); ?>            	     
            	<button class="btn btn-primary" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Vender Productos (salida)">Venta</button>
            	</form>   
                </td>
                <?php endif; ?>
             </table>
   <!-- <a href="/entrada" ><img width="100px"  src="<?php echo e(url('img/entrada.jpg')); ?>"></a>

	<a href="/salida" ><img width="100px"  src="<?php echo e(url('img/salida.jpg')); ?>"></a> --> 
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

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto1\resources\views/productos/mostrar_prod1.blade.php ENDPATH**/ ?>