

<?php $__env->startSection('contenedor'); ?>

<body>
<h3>Venta Producto Actual</h3>  
<br>
<a href="/mostrar/<?php echo e(($producto->id)); ?>" class="btn btn-primary botonderecha"> Atrás</a><br><br>
<br>
<form action="/venta" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
<center>
    <table>
        <tr>
            <td>
                 <label>Cantidad:</label><br>
                 <input type="text" name="cantidad" placeholder="Cantidad Vendida"><br>
            </td>
            <td>
                <label>Referencia:</label><br>
                <input type="text" name="referencia" placeholder="Nº de Control"><br>
            </td>
        </tr>
        
    </table><br>

    <input class="btn btn-primary" type="submit" value="Vender">
</center>
</form>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto1\resources\views/productos/salida_prod.blade.php ENDPATH**/ ?>