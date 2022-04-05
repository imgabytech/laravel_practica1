

<?php $__env->startSection('contenedor'); ?>

<body>
<h3>Editar Producto</h3>  
<br>
<a href="/productos" class="btn btn-primary botonderecha"> Ir a Productos </a><br><br>
<br>
<form action="/actualizar/<?php echo e(($producto->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
<center>
    <table>
         <?php echo $__env->make('productos.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <tr>
            <td>
                 <label>Nombre:</label><br>
                 <input type="text" name="nombre" placeholder="Su nombre" value="<?php echo e($producto->nombre_prod); ?>"><br>
            </td>
            <td>
                <label>Código:</label><br>
                <input type="text" name="codigo" placeholder="Su Apellido" value="<?php echo e($producto->codigo_prod); ?>"><br>
            </td>
        </tr>
        <tr>
            <td>
                <label>Precio:</label><br>
                <input type="text" name="precio" placeholder="Su edad" value="<?php echo e($producto->precio_prod); ?>"><br>
            </td>            
               
                <input type="hidden" name="stock" value="<?php echo e($producto->stock_prod); ?>"><br>           
            
        </tr>    
    </table><br>

    <input class="btn btn-primary" type="submit" value="Guardar">
</center>
</form>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto1\resources\views/productos/editar_prod.blade.php ENDPATH**/ ?>