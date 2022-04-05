<?php $__env->startSection('contenedor'); ?>
<html>
<body>

<h3>Listado de Productos</h3>

<table >

  <tr>
    <th>Nombre</th>
    <th>Código</th>
    <th>Precio</th>
    <th>Stock</th>
  </tr>
<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($producto->nombre_prod); ?></td>
        <td><?php echo e($producto->codigo_prod); ?></td>
        <td><?php echo e($producto->precio_prod); ?></td>
        <td><?php echo e($producto->stock_prod); ?></td>
        <td>

          <a href="/mostrar/<?php echo e(($producto->id)); ?>">Mostrar</a>
                  <!--<form action="/mostrar/<?php echo e(($producto->id)); ?>" >
                  <?php echo csrf_field(); ?>                
                  <button type="button" class="btn btn-outline-success btn-sm" >Mostrar</button>
                  </form> -->
        </td>

        <td>
          <!--<a href="/eliminar/<?php echo e(($producto->id)); ?>" >Eliminar</a>-->
                 <form action="/eliminar/<?php echo e(($producto->id)); ?>">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button type="button" class="btn btn-outline-danger btn-sm">Eliminar</button>
                </form>
        </td>

        <td>
                <a href="/verEditar/<?php echo e(($producto->id)); ?>">Editar</a>
                 <!--<form action="/verEditar/<?php echo e(($producto->id)); ?>">
                  <?php echo csrf_field(); ?>  
                  <?php echo method_field('GET'); ?>                
                  <button type="button" class="btn btn-outline-warning btn-sm" >Editar</button>
                </form>-->
        </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<br>


<a href="/crear">Nuevo Producto</a>
<br><br>
<div >
    
</div>

</body>
</html>
<script>
function asegurar ()
  {
      rc = confirm("¿Seguro que desea Eliminar Registro?");
      return rc;
  }
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('plantillas.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto1\resources\views/productos/index.blade.php ENDPATH**/ ?>